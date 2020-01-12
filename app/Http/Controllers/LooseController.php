<?php

namespace App\Http\Controllers;

use App\Module\Loose\Loose;
use Illuminate\Http\Request;

class LooseController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return $this->render('index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Loose $loose
	 * @return \Illuminate\Http\Response
	 */
	public function show(Loose $loose) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Loose $loose
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Loose $loose) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \App\Loose $loose
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Loose $loose) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Loose $loose
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Loose $loose) {
		//
	}

	public function admin(Loose $loose) {
		return $this->render('admin', ['title' => __('Loose')]);
	}


}
