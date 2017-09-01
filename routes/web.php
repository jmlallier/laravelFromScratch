<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Task;

Route::get( '/', function() {
	$name = "JM";

	return view( 'welcome', compact( 'name' ) );
} );

Route::get( '/tasks/{task?}', function( $id = NULL ) {
	if ( !is_null( $id ) ) {
		$task = Task::find($id);

		return view( 'tasks.show', compact( 'task' ) );
	} else {
		$tasks = Task::all();

		return view( 'tasks.index', compact( 'tasks' ) );
	}
} );