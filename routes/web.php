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
	if(Auth::guest()){
    	return redirect('/login');
	}else{
		return redirect('/home');
	}
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/login', 'AuthController@getLogin');
Route::get('/auth/github', 'AuthController@redirectToProvider');
Route::get('/auth/github/callback', 'AuthController@handleProviderCallback');
Route::get('/logout', 'AuthController@getLogout');

Route::post('/meteo/post/{id}', 'MeteoController@postMeteo');
Route::get('/meteos/list', 'MeteoController@getList');

Route::get('/promotion', 'UserController@list');

Route::get('/users/show/{id}', 'UserController@show');
Route::get('/users/edit', 'UserController@getEdit');
Route::post('/user/post/edit/{id}', 'UserController@postEdit');