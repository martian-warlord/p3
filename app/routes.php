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

Route::get('/', function()
{
	return View::make('home');
});

Route::get('paragraphs', function()
{
    return View::make('para');
});

// Route::get('/new', function() {

//     $view  = '<form method="POST">';
//     $view .= 'Title: <input type="text" name="title">';
//     $view .= '<input type="submit">';
//     $view .= '</form>';
//     return $view;

// });

// Route::get('/simple/{squirrel}', function($squirrel)
// {
//     $data['squirrel'] = $squirrel;

//     return View::make('simple', $data);
// });
