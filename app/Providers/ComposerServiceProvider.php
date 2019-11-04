<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {
	public function boot() {
		// This general composer (TemplateComposer) runs for all routes
		View::composer('*', 'App\Http\ViewComposers\TemplateComposer');
	}

	public function register() {
	}
}
