<?php

/*

*/

Route::get('/', function()
{
	return View::make('layouts.master');
});
//Route::controller('/login','UsersController');



Route::resource('users', 'UsersController');
Route::resource('task', 'TaskController');
Route::get('login', ['as' => 'users.login', 'uses' => 'UsersController@login']);
Route::post('signin', ['as' => 'users.signin', 'uses' => 'UsersController@signin']);
Route::delete('logout', ['as' => 'logout', 'uses' => 'UsersController@logout']);
