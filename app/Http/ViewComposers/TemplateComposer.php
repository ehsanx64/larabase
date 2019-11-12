<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

/*
 * This view composer handles the template system.
 *
 * The template view composer defines several variables accessible in views which are listed below:
 *
 * app_name     The name of application.
 * app_title    This is usually translated app_name. This variable is a form of app_name but for
 *              displaying purposes.
 * page_title   The page title (the text that goes into <title> tag in page's head.
 * panel_title  The title of panel (this is used mostly in back-end pages)
 * template     Where are template files located. This variable depending on the controller may
 *              refer to back-end or front-end template.
 * assets       Same as above but holds location to static assets. Somewhere in $wwwroot/public folder.
 * sidebar_content Content that will be inserted in sidebar.
 * page_language The language for the page. This will be used for setting the page language (html lang="fa") etc
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
		$appUrl = ENV('APP_URL');

		if (\Session::has('locale')) {
			$lang = \Session::get('locale');
		}

		$data = [
            'app_name' => $appName,
            'app_title' => $appTitle,
			'app_url' => $appUrl,
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

		$view->with($data);
	}

	public function getSidebarContent() {
	    // TODO: Implement how sidebar works
	    return '';
		ob_start();
		?>
        <h3>The Sidebar</h3>
		<?php
		return ob_get_clean();
	}
}
