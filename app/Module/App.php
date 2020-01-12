<?php
namespace App\Module;

use Illuminate\Support\Facades\URL;

class App {
	public $appTitle;

	public function __construct() {
		$this->appTitle = ENV('APP_TITLE');
	}
}
