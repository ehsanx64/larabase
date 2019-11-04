<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

/*
 * This view composer handles the template system
 */
class TemplateComposer {
	public function __construct() {
	}

	public function compose(View $view) {
		$data = [
			'pagetitle' => ENV('APP_TITLE') . ' - Hello',
			'apptitle' => ENV('APP_TITLE'),
			'appname' => ENV('APP_NAME'),
			'active_template' => $this->getActiveTemplate()
		];

		$view->with($data);
	}

	public function getActiveTemplate() {
		return 'templates/materialize/page';
	}
}
