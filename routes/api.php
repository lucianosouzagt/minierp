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

Route::post('register','Api\UserController@register');

Route::group(['middleware'=>['auth:api']],function(){
    //Route::apiResource('/products','Api\ProductController');
    Route::get('/products','Api\ProductController@index')->middleware('scope:administrador,usuario');
    Route::get('/products/{id}','Api\ProductController@show')->middleware('scope:administrador,usuario');
    Route::get('/products?page{page}&{qtd}','Api\ProductController@index')->middleware('scope:administrador,usuario');
    Route::post('/products','Api\ProductController@store')->middleware('scope:administrador');
    Route::put('/products/{id}','Api\ProductController@update')->middleware('scope:administrador');
    Route::delete('/products/{id}','Api\ProductController@destroy')->middleware('scope:administrador');

    //Route::apiResource('/groups','Api\GroupController');
    Route::get('/groups','Api\GroupController@index')->middleware('scope:administrador,usuario');
    Route::get('/groups/{id}','Api\GroupController@show')->middleware('scope:administrador,usuario');
    Route::get('/groups?page{page}&{qtd}','Api\GroupController@index')->middleware('scope:administrador,usuario');
    Route::post('/groups','Api\GroupController@store')->middleware('scope:administrador');
    Route::put('/groups/{id}','Api\GroupController@update')->middleware('scope:administrador');
    Route::delete('/groups/{id}','Api\GroupController@destroy')->middleware('scope:administrador');

    //Route::apiResource('/address','Api\AddressController');
    Route::get('/address','Api\AddressController@index')->middleware('scope:administrador,usuario');
    Route::get('/address/{id}','Api\AddressController@show')->middleware('scope:administrador,usuario');
    Route::get('/address?page{page}&{qtd}','Api\AddressController@index')->middleware('scope:administrador,usuario');
    Route::post('/address','Api\AddressController@store')->middleware('scope:administrador');
    Route::put('/address/{id}','Api\AddressController@update')->middleware('scope:administrador');
    Route::delete('/address/{id}','Api\AddressController@destroy')->middleware('scope:administrador');

    //Route::apiResource('/clients','Api\ClientController');
    Route::get('/clients','Api\ClientController@index')->middleware('scope:administrador,usuario');
    Route::get('/clients/{id}','Api\ClientController@show')->middleware('scope:administrador,usuario');
    Route::get('/clients?page{page}&{qtd}','Api\ClientController@index')->middleware('scope:administrador,usuario');
    Route::post('/clients','Api\ClientController@store')->middleware('scope:administrador');
    Route::put('/clients/{id}','Api\ClientController@update')->middleware('scope:administrador');
    Route::delete('/clients/{id}','Api\ClientController@destroy')->middleware('scope:administrador');
});

