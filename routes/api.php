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

Route::middleware('auth:api')->get('/user', function (Request $request) {

    return $request->user();
});

Route::get('menu', 'OrderController@menu');

Route::get('order', 'OrderController@order');

Route::post('order', 'OrderController@create');

Route::get('order/{id}', 'OrderController@viewOrder');

Route::get('order/edit/{id}', 'OrderController@editOrder');

Route::put('order/edit/{id}', 'OrderController@update');

Route::delete('order/{id}', 'OrderController@delete');
