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

// Route::get('/', function()
// {
	// return View::make('hello');
// });


// Put the code here - makeitsnappy

//	Route::get('/', array('as'->'home' , 'uses' => 'questions@index'));
	Route::get('/', array('as'=>'home', 'uses'=>'questions@index'));

// Route::get('/', function()
// {
	// echo 'Correct';
// });