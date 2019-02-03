<?php
namespace App\Module;

class Tools {
	public static function jsonReturn($data) {
		return response()->json([
			'result' => true,
			'data' => $data
		]);
	}

	public static function jsonError($data) {
		return response()->json([
			'result' => false,
			'data' => $data
		]);
	}

	public static function jsonAbort($error, $message = '') {
		return self::jsonError([
			'error' => $error,
			'message' => $message
		]);
	}
}
