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
    return view('hello');
});

Route::get('/hello', function () {
	return view('hello');
});

Route::get('/test', function () {
    return Response::json([
        'result' => true,
        'data' => [
            'name' => 'Ehsan Mohammadi'
        ]
    ]);
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('home');
