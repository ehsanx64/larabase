<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller {
	public function index() {
		$posts = Post::latest()->get();
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
		$fields = \Request::all();
		$fields['published_at'] = Carbon::now();
		Post::create($fields);
		return redirect('posts');
	}
}
