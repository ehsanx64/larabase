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

Route::get('/admin', 'AdminController@index');

Route::resources([
	'loose' => 'LooseController'
]);
defineModuleAdmin('loose');

// TODO: Write a function similar to below for DRY sake
//attachModule([
//	'loose' => [
//		'controller' => 'LooseController'
//	]
//]);

// TODO: FIND A DRYied method for route declarations
// Post related routes
Route::get('/posts', 'PostController@index');
Route::get('/posts/{id}', 'PostController@show');

Auth::routes();
