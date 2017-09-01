<?php

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::get( '/', function() {
	$name = "JM";

	return view( 'welcome', compact( 'name' ) );
} );