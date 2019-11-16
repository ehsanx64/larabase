<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller {
	public function index() {
		$posts = Post::all();
		return View('posts.index')->with(['posts' => $posts]);
	}

	public function show($id) {
		$thePost = Post::findOrFail($id);

		return View('posts.show')->with(['post' => $thePost]);
	}
}
