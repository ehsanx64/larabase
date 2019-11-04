<?php
/**
 * @param $str String to be searched for and translated
 * @return string The translated string
 */
function lbh_t($str) {
	return App\Module\Xlate::t($str);
}
