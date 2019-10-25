<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class FirstComposer {
	public function __construct() {
	}

	public function compose(View $view) {
		$data = [
			'pagetitle' => ENV('APP_TITLE') . ' - Hello',
			'apptitle' => ENV('APP_TITLE'),
			'appname' => ENV('APP_NAME'),
		];

		$view->with($data);
	}
}
