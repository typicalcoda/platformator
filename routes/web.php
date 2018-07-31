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

Route::get('/', function(){
	return "main page";
});

Route::get('/client/login', function () {
	return view('auth.client.login');
});

Route::post('/client/login', function () {
	if(Auth::attempt(['email' => request('email'), 'password' => request('password')]))
		return Response::json(array("response" => true, "redirect_url" => "/client/home"), 200);

	return Response::json(array("response" => false), 401);
});

Route::get('/client/home', function () {
	return view('client.pages.home');
});


Route::get('/client/systems/new', function () {
	return view('client.pages.systems.new', array('active_link' => 3));
});

Route::get('/client/logout', function () {
	if(Auth::check())
		Auth::logout();

	return redirect('/');
});