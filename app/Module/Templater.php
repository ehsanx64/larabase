<?php

namespace App\Module;

class Templater {
	protected static $model;


	public static function setModel($model) {
		self::$model = $model;
	}

	protected static function getModelData($name, $defaultValue = '') {
		if (self::$model == false || !isset(self::$model->$name)) {
			return $defaultValue;
		} else {
			return self::$model->$name;
		}
	}

	protected static function getDefaultTitle($name, $title) {
		return $title == '' ? ucfirst($name) : $title;
	}
}
