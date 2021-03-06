<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/main', function()
{
	return View::make('main.main');
});

Route::get('/staff/menu', function()
{
	return View::make('staff.menu');
});

Route::get('/posts/new', function()
{
	return View::make('posts.new');
});