<?php

// use App\Http\Controllers\StaffController;

use App\Http\Controllers\api\v1\StaffController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('auth:sanctum')->group(function(){
//     Route::apiResource('staffs', StaffController::class);

// });
Route::group(['middleware' => 'auth:sanctum','prefix' => 'v1'], function() {
    Route::apiResource('staffs', StaffController::class);

});
