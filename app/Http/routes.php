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

Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');

Route::get('/auth/register', 'Auth\AuthController@getRegister');
Route::post('/auth/register', 'Auth\AuthController@postRegister');

Route::group(['prefix' => 'user'], function () {
    Route::get('add/{id?}', 'userController@create');
    Route::get('', 'userController@show');
    Route::post('', 'userController@store');
    Route::patch('/{id}', 'userController@update');
    Route::get('delete/{id}', 'userController@destroy');
});


Route::group(['prefix' => 'image'], function () {
    Route::get('add/{id?}', 'userController@create');
    Route::get('', 'imageController@show');
    Route::post('', 'imageController@store');
    //Route::patch('/{id}', 'userController@update');
    //Route::get('delete/{id}', 'userController@destroy');
});
//Route::post('user', 'userController@store');
//Route::get('client/add', 'userController.create');
//Route::get('client/add', 'userController.create');

Route::get('/', function () {
            return view('welcome');
        });

Route::get('foo/bar/{id?}', function ($id = null) {
            return 'Hello World' . $id;
        });
Route::group(['prefix' => 'admin'], function () {
    Route::get('users', function ()    {
        return 'Hello World ho r kl?';
        // Matches The "/admin/users" URL
    });
});
