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

/**
 * Public pages
 */
Route::get('/', [
	'as' => 'home', 
	'uses' => 'PagesController@home'
]);

/**
 * Routes for authentication
 */
Route::auth();

/**
 * Dashboard
 */
Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function() {
	Route::get('/', 'DashboardController@index');
	Route::resource('quotes', 'QuotesController');
});
