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

Route::get(
	'/', function () {
	return view('hello');
});

Auth::routes();

Route::get('/admin', 'AdminController@index');

Route::group(
	array('namespace' => 'admin', 'prefix' => 'admin'), function () {
	Route::resource('blog', 'BlogController');
});

//Route::get('/dashboard', 'DashboardController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
