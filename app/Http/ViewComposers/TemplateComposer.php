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
	    // This is the default locale
		$lang = 'fa';

		if (\Session::has('locale')) {
			$lang = \Session::get('locale');
		}

		$data = [
			'pagetitle' => ENV('APP_TITLE'),
			'apptitle' => ENV('APP_TITLE'),
			'appname' => ENV('APP_NAME'),
			'active_template' => $this->getActiveTemplate(),
			'sidebar_content' => $this->getSidebarContent(),
			'pagelanguage' => $lang,
		];

		$view->with($data);
	}

	public function getActiveTemplate() {
		return 'templates/materialize';
	}

	public function getSidebarContent() {
		ob_start();
		?>
        <h3>The Sidebar</h3>
		<?php
		return ob_get_clean();
	}
}
