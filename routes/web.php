<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/', function(){
	return view('home');
});

Route::get('/dashboard', function(){
	return view('dashboard');
});

Route::post('/user/{user}', 'TransactionController@transfer');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/login', function(){
	return view('login');
});

Route::get('/transfer', function(){
	return view('transfer');
});
