<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Post;
use Illuminate\Http\Request;

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

	public function store(CreatePostRequest $request) {
		Post::create($request->all());
		return redirect('posts');
	}

	public function edit($id) {
		$post = Post::findOrFail($id);
		return view('posts.edit', ['post' => $post]);
	}

	public function update($id, Request $request) {
		$post = Post::findOrFail($id);
		$post->update($request->all());
		return redirect('posts');
	}
}
