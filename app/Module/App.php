<?php
namespace App\Module;


class App {
	public $appTitle;

	public function __construct() {
		$this->appTitle = ENV('APP_TITLE');
	}

}
