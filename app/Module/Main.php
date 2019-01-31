<?php
namespace App\Module;

use App\Module\Tools;

class Main {
	public static function returnHelloData() {
		$appUrl = config('app.url') . '/';

		return Tools::jsonReturn([
			'name' => 'ReactShell',
			'entities' => [
				'post' => [
					'fields' => [
						'id' => 'pk',
						'title' => 'text',
						'content' => 'text'
					]
				]
			],
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
	}
}
