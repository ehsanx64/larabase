<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller {
	public function index() {
		// We'll add a query scope instead of following code
//		$posts = Post::latest('published_at')->where('published_at', '<=', Carbon::now())->get();

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
		//		$fields['published_at'] = Carbon::now();
		Post::create(\Request::all());
		return redirect('posts');
	}
}
