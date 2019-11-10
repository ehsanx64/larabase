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

    protected $templatePath;
    protected $adminTemplatePath;

	public function __construct() {
	    $this->assetsUri = sprintf("/%s", ENV('APP_TEMPLATE'));
	    $this->adminAssetsUri = sprintf("/%s", ENV('APP_ADMIN_TEMPLATE'));

		$this->templatePath = sprintf("templates/%s", ENV('APP_TEMPLATE'));
		$this->adminTemplatePath = sprintf("templates/%s", ENV('APP_ADMIN_TEMPLATE'));
	}

	public function compose(View $view) {
	    // This is the default locale
		$lang = 'fa';
		$route = app('request')->route()->uri;
		$appName = ENV('APP_NAME');
		$appTitle = ENV('APP_TITLE');

		if (\Session::has('locale')) {
			$lang = \Session::get('locale');
		}

		$data = [
            'app_name' => $appName,
            'app_title' => $appTitle,
            'page_title' => __($appName),
            'panel_title' => __("$appName Control Panel"),
            'template' => $this->templatePath,
            'assets' => $this->assetsUri,
			'sidebar_content' => $this->getSidebarContent(),
            'page_language' => $lang
		];

		// If route starts with admin set active template as an admin template
		$p = 'admin';
		if (substr($route, 0, strlen($p)) === $p) {
            $data['template'] = $this->adminTemplatePath;
            $data['assets'] = $this->adminAssetsUri;
		}

//		dd($data);

		$view->with($data);
	}

	public function getSidebarContent() {
		ob_start();
		?>
        <h3>The Sidebar</h3>
		<?php
		return ob_get_clean();
	}
}
