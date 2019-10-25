<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {
	public function boot() {
		// This general composer (FirstComposer) runs for all routes
		View::composer('*', 'App\Http\ViewComposers\FirstComposer');
	}

	public function register() {
	}
}
