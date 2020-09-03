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

Route::get('/',
['as' => 'contact', 'uses' => 'HomeController@index']);

Route::post('/', 
['as' => 'contact_store', 'uses' => 'HomeController@postEmail']);



Route::get('/sweepstakes',
['as' => 'contact', 'uses' => 'HomeController@sweepstakes']);

Route::post('/sweepstakes', 
['as' => 'contact_store', 'uses' => 'HomeController@postSweepstakes']);




Route::get('products/{category?}', 'ProductController@index');

Route::get('product/{model_name}', 'ProductController@getProduct');



Route::get('brochures', 'ProductController@productBrochures');





Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
