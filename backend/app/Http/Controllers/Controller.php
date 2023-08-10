<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function sendResponse($result, $message)
    {
    	$response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];
        return response()->json($response, 200);
    }

        /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error)
    {
    	$response = [
            'status' => false,
            'message' => $error,
        ];
        return response()->json($response, 404);
    }
}
