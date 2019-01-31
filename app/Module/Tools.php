<?php
namespace App\Module;

class Tools {
	public static function jsonReturn($data) {
		return response()->json([
			'result' => true,
			'data' => $data
		]);
	}
}
