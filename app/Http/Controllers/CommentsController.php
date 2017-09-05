<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

class CommentsController extends Controller {
	public function store( Post $post ) {
		$this->validate( request(), [ 'content' => 'required|min:10' ] );
		$post->addComment( request( 'content' ), auth()->user()->id );

		return back();
	}
}
