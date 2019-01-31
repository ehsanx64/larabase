<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module\Page;
use App\Module\Post;

class PageController extends Controller {
	public function getContent($id) {
		switch ($id) {
		case 'about':
			return Page::returnPage('About page content');
			break;
		case 'home':
			return Page::returnPage('This is the homepage');
			break;
		case 'post':
			return Post::getIndexContent();
			break;
		}
	}
}
