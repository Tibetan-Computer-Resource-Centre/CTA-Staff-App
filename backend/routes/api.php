<?php

// use App\Http\Controllers\StaffController;

use App\Http\Controllers\api\v1\AuthController;
use App\Http\Controllers\api\v1\StaffController;
use App\Http\Controllers\api\v1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Migrate;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::prefix('migrate')->group(function (){
    Route::get('staffs',          [Migrate::class,'staff']);
    // Route::get('documents',       [Migrate::class,'document']);
    // Route::get('families',        [Migrate::class,'family']);
    // Route::get('retirements',     [Migrate::class,'retirement']);
    // Route::get('leaves',          [Migrate::class,'leave']);
    // Route::get('experiences',     [Migrate::class,'experience']);
    // Route::get('promotions',      [Migrate::class,'promotion']);
    // Route::get('otherRanks',      [Migrate::class,'otherRank']);
    // Route::get('postAllocations', [Migrate::class,'postAllocation']);
    // Route::get('dropTables',      [Migrate::class,'dropTable']);

});
// Testing API for the app up and running 
Route::group(['prefix' => 'v1'],function(){
    Route::get('test',function(Request $request){
        return "API running Successfully";
    });
    // Login Authentication
    Route::post('auth/login',[AuthController::class,'login']);
});


// Authorization access with the bearer Token
Route::group(['middleware' => 'auth:sanctum','prefix' => 'v1'], function() {
    // 2FA verification
    Route::post('auth/verification_2fa',[AuthController::class,'verification_2fa']);
    // Staff API 
    Route::apiResource('staffs', StaffController::class);
    // User API
    Route::apiResource('users', UserController::class);

});
