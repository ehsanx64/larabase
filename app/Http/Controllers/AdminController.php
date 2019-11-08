<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AdminController extends BaseController {
	public function __construct() {
		$this->middleware('auth');
	}

	protected function render($tplfile) {
	}

	public function index() {
//		return __METHOD__;
		return view('templates.admin-materialize.page');
	}
}
