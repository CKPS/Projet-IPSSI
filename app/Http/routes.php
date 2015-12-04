<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', 'UserController');

Route::get('user/{id}', 'UserController@show');

Route::get('user/delete/{id}', 'UserController@destroy');

Route::get('user/edit/{id}', 'UserController@edit');

Route::post('user/store', 'UserController@store');



