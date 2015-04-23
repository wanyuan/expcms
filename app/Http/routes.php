<?php

/*
|--------------------------------------------------------------------------
| 首页路由
|--------------------------------------------------------------------------
*/

Route::get('/', 'WelcomeController@index');
Route::get('/about','WelcomeController@about');


Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
