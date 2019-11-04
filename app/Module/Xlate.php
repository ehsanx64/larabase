<?php
namespace App\Module;

use ehsanx64\phplib\Translate;

class Xlate {
	/**
	 * Translate a string using phplib's Translate class
	 * @param $str The string to be translated
	 * @return string The translated string
	 */
	public static function t($str) {
		$t = new Translate(__DIR__ . DIRECTORY_SEPARATOR . 'xlate');

		// TODO: Find a flexible method to set/determine the active locale (language)
		$t->setLocale('fa');
		return $t->t($str);
	}
}
