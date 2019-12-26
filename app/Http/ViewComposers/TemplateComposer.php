<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Whoops\Util\TemplateHelper;

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
    protected $templateName;
    protected $adminTemplateName;

	public function __construct() {
	    $this->templateName = ENV('APP_TEMPLATE');
	    $this->adminTemplateName = ENV('APP_ADMIN_TEMPLATE');
	    $this->assetsUri = sprintf("/%s", $this->templateName);
	    $this->adminAssetsUri = sprintf("/%s", $this->adminTemplateName);

		$this->templatePath = sprintf("templates/%s", $this->templateName);
		$this->adminTemplatePath = sprintf("templates/%s", $this->adminTemplateName);
	}

	public function compose(View $view) {
	    // This is the default locale
		$lang = 'fa';
		$route = app('request')->route()->uri;
		$appName = ENV('APP_NAME');
		$appTitle = ENV('APP_TITLE');
		$appUrl = ENV('APP_URL');
		$ds = DIRECTORY_SEPARATOR;

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

		if ($this->shouldUseAdminTemplate($route)) {
			$data['template'] = $this->adminTemplatePath;
			$data['assets'] = $this->adminAssetsUri;

			$templateHalperPath = sprintf("%s/resources/views/templates/%s/TH.php",
                dirname(dirname(dirname(__DIR__))), $this->adminTemplateName);
			require_once $templateHalperPath;
//			$data['th'] = \TemplateTagger;
//			$data['model'] = false;
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

	private function shouldUseAdminTemplate($route) {
		// If route starts with admin set active template as an admin template
		$p = 'admin';
		if (substr($route, 0, strlen($p)) === $p) {
			return true;
		}

		if (preg_match('/(edit|create)$/', $route)) {
		    return true;
        }
    }
}
