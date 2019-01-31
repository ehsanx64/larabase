<?php
namespace App\Module;

use App\Module\Page;

class Post {
	public static function getIndexContent() {
		return Page::returnPage([
			'data' => self::getDummyContent(),
			'type' => 'gridview'
		], true);
	}

	private static function getDummyContent() {
		return [
			[
				'id' => '1',
				'title' => 'Hello there',
				'content' => 'This is the content'
			],
			[
				'id' => '2',
				'title' => 'Hello there again',
				'content' => 'This is the content'
			],
			[
				'id' => '3',
				'title' => 'Hello there and back again',
				'content' => 'This is the content'
			],
			[
				'id' => '4',
				'title' => 'I am here, Hello there',
				'content' => 'This is the content'
			],
		];
	}
}
