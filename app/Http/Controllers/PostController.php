<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller {
	public function index() {
		// Use a query scope named published
		$posts = Post::latest('published_at')->published()->get();

		return View('posts.index')->with(['posts' => $posts]);
	}

	public function show($id) {
		$thePost = Post::findOrFail($id);
		return View('posts.show')->with(['post' => $thePost]);
	}

	public function create() {
		return View('posts.create');
	}

	public function store() {
		Post::create(\Request::all());
		return redirect('posts');
	}
}
