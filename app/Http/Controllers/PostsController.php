<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller {
	public function index() {
		$posts = Post::all();

		return view( 'posts.index', compact( 'posts' ) );
	}

	public function show(Post $post) {
		return view( 'posts.show', compact('post') );
	}

	public function create() {
		return view( 'posts.create' );
	}

	public function store() {
		$this->validate( request(), [
			'title'   => 'required',
			'content' => 'required',
			'image'   => 'required',
		] );

		Post::create( request( [ 'title', 'content', 'image' ] ) );

		return redirect( '/' );
	}

}
