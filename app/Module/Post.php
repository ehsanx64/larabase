<?php
namespace App\Module;

use App\Module\Page;

class Post {
	public static function getFields() {
		return [
			[
				'name' => 'id',
				'title' => 'ID',
				'gridable' => true
			],
			[
				'name' => 'title',
				'title' => 'Title',
				'gridable' => true
			],
			[
				'name' => 'content',
				'title' => 'Content',
				'gridable' => false
			]
		];
	}

	public static function getGridViewRecordActions() {
		return [
			'name' => 'gridview_actions',
			'title' => 'Actions',
			'gridable' => true
		];
	}

	public static function getGridViewFields() {
		$fields = self::getFields();
		$gvfields = [];

		foreach ($fields as $field) {
			if ($field['gridable'] == true) {
				$gvfields[] = $field;
			}
		}

		$gvfields[] = self::getGridViewRecordActions();

		return $gvfields;
	}

	public static function getIndexContent() {
		return Page::returnPage([
			'data' => self::getDummyContent(),
			'fields' => self::getGridViewFields(),
			'type' => 'gridview'
		], true
		);
	}

	private static function getDummyContent() {
		$cnt = self::getCoreDummyContent();
		$out = [];
		$t = [];

		foreach ($cnt as $c) {
			$t = $c;
			$t['gridview_actions'] = [
				[
					'name' => 'edit',
					'title' => 'Edit',
					'color' => 'green'
				],
				[
					'name' => 'remove',
					'title' => 'Remove',
					'color' => 'red'
				]
			];
			$out[] = $t;
		}

		return $out;
	}

	private static function getCoreDummyContent() {
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
