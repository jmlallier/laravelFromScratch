<?php

namespace App;

class Post extends Model {

	public function addComment( $content, $user_id ) {
		$this->comments()->create( compact( 'content', 'user_id' ) );
	}

	public function comments() {
		return $this->hasMany( Comment::class );
	}

	public function user() {
		return $this->belongsTo( User::class );
	}
}
