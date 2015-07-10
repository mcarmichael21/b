<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Informational Landing page.
Route::get('/', function () {
    return view('welcome');
});

// Bar's backend login page.
Route::get('/login', 'LoginController@show');

// Sign your bar up to use bargo
Route::get('/register', function () {
    return view('register');
});

// Get started with bargo with a quick tutorial and set your information.
Route::get('/getting-started', function () {
    return "<h1>Getting Started</h1>";
});


// Bar's informational page.
Route::get('/{barName}', function ($barName) {
    return "<h1>".$barName."</h1>";
});

// Edit bar's informational page.
Route::get('/{barName}/edit', function ($barName) {
    return "<h1>".$barName."</h1>";
});
