<?php
class TH extends \App\Module\Templater {
	public static function handleActiveMenu($target) {
		$routeArray = app('request')->route()->uri();
		$m = false;
		$res = preg_match("#.*$target.*#", $routeArray, $m);

		if (count($m) > 0) {
			return 'active';
		}

		return '';
	}
}
