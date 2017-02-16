<?php

use Illuminate\Http\Request;

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

//Route::middleware('api')->get('/user/{id}', array('uses' => 'UserController@UserDetails'));
Route::middleware('api')->get('/user', array('uses' => 'UserController@userDetails'));
Route::middleware('api')->post('/user/login', array('uses' => 'UserController@login'));
Route::middleware('api')->post('/user/auth' , array('uses' => 'UserController@auth'));
Route::middleware('api')->get('/user/logout' , array('uses' => 'UserController@logout'));
//Route::get('api/h/{id}', array('uses' => 'UserController@UserDetails'));
