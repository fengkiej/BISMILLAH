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

Route::get('/', function(){
	return view('home');
});

Route::get('/dashboard', function(){
	$username = \Auth::user()->username;
	$ledger = \App\Ledger::where('from', $username)->orWhere('to', $username)->get();
	return view('dashboard',['ledger' => $ledger, 'username' => $username]);
});

Route::post('/send/{user}', 'TransactionController@transfer');
Route::post('/confirm/{transactionId}', 'TransactionController@confirmRekber');
Route::post('/bank/confirm/{transactionId}', 'TransactionController@confirmBankTransaction');

Auth::routes();
Route::get('/chartdata', 'ChartController@chartData');
Route::get('/home', 'HomeController@index');

Route::get('/login', function(){
	return view('login');
});

Route::get('/signup', function(){
	return view('register');
});

Route::get('/transactiondetail', function(){
	return view('banktransferdetail');
});

Route::get('/{username}/transfer', function($username){
	$bd = \App\BalanceDetail::where('user', $username)->first();
	$balance = $bd->balance;
	return view('transfer', ['username'=>$username, 'balance'=>$balance]);
});

Route::get('/{username}', function ($username) {
	$user = \App\User::where('username', $username)->get();
    return view('profile', ['user' => $user]);
});

