<?php

/*
|--------------------------------------------------------------------------
| 首页路由
|--------------------------------------------------------------------------
*/

Route::get('/', 'WelcomeController@index');
Route::get('/about','WelcomeController@about');

Route::match(['get','post'], 'hello', function(){
    return "really?";
});

Route::any('world',function(){
    return "world";
});
Route::get('user/{id}', 'WelcomeController@user');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
