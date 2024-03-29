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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'LoginController@show');

Route::get('register', 'UsersController@register');
Route::get('users/show', 'UsersController@show');
Route::post('users/store','UsersController@store');
