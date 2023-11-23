<?php

use App\Http\Controllers\Client\FlightController;
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

Route::group(['prefix'=>'app','name'=>'app.'],function (){
    Route::post('/avail',[FlightController::class,'avail']);
    Route::post('/pre-reserve',[FlightController::class,'preReserve']);
    Route::post('/reserve',[FlightController::class,'reserve']);
    Route::post('/confirm',[FlightController::class,'confirm']);
});
Route::get('/test',[FlightController::class,'test']);
