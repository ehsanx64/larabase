<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * This class is the base class for both front-end and back-end controllers and defines methods
 * useful for both sides.
 *
 * Class Controller
 * @package App\Http\Controllers
 */
class Controller extends BaseController {
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	/**
	 * This method is used for making things a little easier. It will detect the requested controller
	 * and loads the given view from a directory with the same name as the controller.
	 *
	 * @param $viewfile string Name of view to be rendered
	 * @param $data array Array containing variables to be passed on to view and/or template
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	protected function render($viewfile, $data = []) {
		$target = strtolower(str_replace('Controller', '',
			class_basename(app('request')->route()->controller)));
		return view("$target.$viewfile", $data);
	}

	public function __construct() {
		$this->middleware('auth')->only(['admin', 'create', 'store', 'edit', 'update', 'destroy']);
	}
}
