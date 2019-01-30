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
    return view('welcome');
});

Route::get('/about', function () {
	return json_encode([
		'result' => true,
		'data' => [
			'pageContent' => 'Hello there'
		]
	]);
});

Route::get('/page/{id}', function () {
	return json_encode([
			'result' => true,
			'data' => [
					'pageContent' => 'Hello there'
			]
	]);
});

Route::get('/hello', function () {
	$appUrl = config('app.url') . '/';

    return json_encode([
		'name' => 'ReactShell',
		'urls' => [
			'home' => [
				'url' => $appUrl,
				'title' => 'Home',
				'path' => '/',
				'contentUrl' => $appUrl . 'page/home'
			],
			'post' => [
				'url' => $appUrl . 'post',
				'title' => 'Posts',
				'path' => '/post',
				'contentUrl' => $appUrl . 'page/post'
			],
			'about' => [
				'url' => $appUrl . 'about',
				'title' => 'About',
				'path' => '/about',
				'contentUrl' => $appUrl . 'page/about'
			]
		],
    ]);
});
