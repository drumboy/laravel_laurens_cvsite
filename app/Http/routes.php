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

/* Home */
/*
Route::get('/', function () {
    return view('home');
});
*/

Route::get('/', 'PagesController@home');


/* Persoonlijke info */
Route::get('persoonlijk', 'PagesController@persoonlijk');

/* Opleidingen */
Route::get('opleidingen', 'PagesController@opleidingen');

/* Werkervaring */
Route::get('werkervaringen', 'WerkervaringController@index');
Route::get('werkervaringen/{werkervaring}', 'WerkervaringController@show');

