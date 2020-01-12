<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;

class PostController extends Controller {
	public function index() {
		// Use a query scope named published
		$posts = Post::latest('created_at')->published()->get();
		return View('posts.index')->with(['posts' => $posts]);
	}

	public function show($id) {
		$thePost = Post::findOrFail($id);
		return View('posts.show')->with(['post' => $thePost]);
	}

	public function create() {
		return View('posts.create');
	}

	public function store(PostRequest $request) {
		Post::create($request->all());
		return redirect('posts');
	}

	public function edit($id) {
		$post = Post::findOrFail($id);
		return view('posts.edit', ['model' => $post]);
	}

	public function update($id, PostRequest $request) {
		$post = Post::findOrFail($id);
		$post->update($request->all());
		return redirect('posts');
	}

	public function admin(Post $post) {
		return view('posts.admin', ['title' => 'Posts']);
	}
}
