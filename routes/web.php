<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', array('as' => 'login', 'uses' => 'web\LoginController@index'));
Route::post('/singup', array('as' => 'registration', 'uses' => 'LoginController@singup'));
Route::post('/login', array('as' => 'login', 'uses' => 'web\LoginController@login'));
Route::get('/logout', array('as' => 'logout', 'uses' => 'web\LoginController@logOut'));
Route::get('/auth', array('as' => 'auth', 'uses' => 'web\LoginController@auth'));
