<?php
namespace App\Module;

use App\Module\Tools;

class Page {
	public static function returnPage($content, $complex = false) {
		return Tools::jsonReturn([
			'complexPage' => $complex,
			'pageContent' => $content
		]);
	}
}
