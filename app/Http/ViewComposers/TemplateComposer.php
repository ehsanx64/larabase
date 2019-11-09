<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

/*
 * This view composer handles the template system
 */

class TemplateComposer {
	/**
	 * This URI point to root location in which template assets (active template) reside.
	 */
    protected $assetsUri;

	/**
	 * Same as above; but this one holds uri for admin's (control panel) template.
	 */
    protected $adminAssetsUri;

	public function __construct() {
	    $this->assetsUri = sprintf("templates/%s", ENV('APP_TEMPLATE'));
	    $this->adminAssetsUri = sprintf("templates/%s", ENV('APP_ADMIN_TEMPLATE'));
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
			'active_template' => $this->assetsUri,
            'active_admin_template' => $this->adminAssetsUri,
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
