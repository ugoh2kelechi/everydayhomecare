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

Route::get('/', 'mainController@index');

Route::get('home', 'mainController@index');

Route::get('admin', 'mainController@admin');

Route::post('Pagename', 'pagesController@store');
Route::post('Pagecontent', 'contentController@store');

Route::post('pageMedia','mediaController@store');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
