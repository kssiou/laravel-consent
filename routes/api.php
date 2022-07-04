<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChoixController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//get all choix
Route::get('choixes',[ChoixController::class,'getChoix']);
Route::get('clients',[ClientsController::class,'getClients']);
Route::post('addclient',[ClientsController::class,'addClient']);
Route::post('addchoix',[ChoixController::class,'addChoix']);
Route::put('updateclient/{id}',[ClientsController::class,'updateClient']);
Route::delete('deleteclient/{id}',[ClientsController::class,'deleteClient']);
Route::get('client/{id}',[ClientsController::class,'getClientById']);
Route::put('updatechoix/{id}',[ClientsController::class,'updateChoix']);
Route::get('choix/{id}',[ClientsController::class,'getchoixById']);
Route::post('register',[AuthController::class,'register']);
Route::put('login',[AuthController::class,'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [AuthController::class, 'user']);
    Route::post('logout', [AuthController::class, 'logout']);
});

