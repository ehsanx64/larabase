<?php

namespace App\Http\Middleware;

use Closure;

class CheckToken {
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {

		if (is_null($request->t)) {
			return $this->abort('no token found');
		}

//		dd((int) $request->t);

		if ((int) $request->t == 0) {
			return $this->abort("not a number");
		}

		$t = (int) $request->t;

		if ($t < 0 || $t > 10) {
			return $this->abort('invalid token');
		}

		return $next($request);
	}

	private function abort($msg = '') {
		return \App\Module\Tools::jsonAbort(1, empty($msg) ? 'User not authenticated' : $msg);
	}
}
