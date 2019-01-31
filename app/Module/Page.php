<?php
namespace App\Module;

use App\Module\Tools;

class Page {
	public static function returnPage($content) {
		return Tools::jsonReturn([
			'pageContent' => $content
		]);
	}
}
