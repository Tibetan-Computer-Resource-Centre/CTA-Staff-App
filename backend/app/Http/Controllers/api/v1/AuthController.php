<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use PragmaRX\Google2FA\Google2FA;

class AuthController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function login(Request $request)
    {
        // Check
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' =>'required',
        ]);

        // check if the user is exit in the database along with the correct
        // email and password
        if(Auth::attempt($credentials)){            
            $user = Auth::user();
            // // return $user;
            // if($user->otp_enabled ===1){
            //     return "enable";
            // }
            // return "not enabled";
            // QRcode
            $google2fa = app(Google2FA::class);

            $g2faUrl = $google2fa->getQRCodeUrl(
                $user->name,
                $user->email,
                $user->otp_ascii,
            );
            
            $writer = new Writer(
                new ImageRenderer(
                    new RendererStyle(400),
                    new ImagickImageBackEnd()
                )
            );
            
            $qrcode_image = base64_encode($writer->writeString($g2faUrl));
            $success['token'] =  $user->createToken($user->name)->plainTextToken; 
            $success['name'] =  $user->name;
            $success['qrcode'] = $qrcode_image;
            // return response()->json($success);
            return $this->sendResponse($success,'Login Valid');
        }else{  
            return $this->sendError('Incorrect email or password.', 'Failed');
        }
    }


    // 2 Factor Verification
    public function verification_2fa(Request $request){
        $google2fa = new Google2FA();
        $user = Auth::user();
        $secret = strval($request->otp);
        $valid = $google2fa->verifyKey($user->otp_ascii, $secret);  
        try {
            if($valid && Auth::user()){
                return "successfully passed";
            }else{
                return $this->sendError('Incorrect email or password.', 'Failed');
            }
        } catch (\Throwable $th) {
        }
    }
}
