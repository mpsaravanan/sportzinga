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
Route::get('homes', array('as' => 'login', 'uses' => 'web\LoginController@index'));
Route::post('homes/singup', array('as' => 'login', 'uses' => 'LoginController@singup'));
