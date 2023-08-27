<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(
    ['prefix' => 'pedidos'],
    function () {
        Route::post('get-carta', 'App\Http\Controllers\PedidosController@getPedidos');
        Route::post('get-addons', 'App\Http\Controllers\PedidosController@getAddons');
        Route::post('get-sedes', 'App\Http\Controllers\PedidosController@getSedes');
    }
);