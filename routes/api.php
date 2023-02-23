<?php

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

// =================================================================

Route::get('/status', 'Api\ClienteController@status');

Route::namespace('Api')->group( function() {

    Route::post('/clientes/add', 'ClienteController@add');

    Route::get('/clientes', 'ClienteController@list');
    Route::get('clientes/{id}', 'ClienteController@select');

    Route::put('clientes/{id}', 'ClienteController@update');

    Route::delete('/clientes/{id}', 'ClienteController@delete');
});







