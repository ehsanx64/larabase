<?php

namespace App\Http\Middleware;

use Closure;

/**
 * This class (middleware) sets the Laravel locale based on various items. Url, cookie etc.
 * Class CheckLocale
 * @package App\Http\Middleware
 */
class Localization {
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {
	    $validLocales = ['en', 'fa'];

		// TODO: Add\improve locale detection
        if(\Session::has('locale')) {
            $locale = \Session::get('locale');

            if (in_array($locale, $validLocales)) {
                \App::setLocale($locale);
            }
        } else {
            \App::setLocale('fa');
        }

        return $next($request);
	}
}
