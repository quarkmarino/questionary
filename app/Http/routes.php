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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::resource('tests', 'TestsController');
Route::resource('tests.questions', 'QuestionsController');
Route::resource('tests.questions.replies', 'RepliesController');


/*Route::get('/questions', 'QuestionsController@index');
Route::get('/questions/{id}', 'QuestionsController@show')->filter(['id' => '[0-9]+']);
Route::get('/questions/create', 'QuestionsController@create');
Route::post('/questions', 'QuestionsController@store');
Route::get('/questions/{id}', 'QuestionsController@edit')->filter(['id' => '[0-9]+']);
Route::put('/questions/{id}', 'QuestionsController@update')->filter(['id' => '[0-9]+']);
Route::delete('/questions/{id}', 'QuestionsController@destroy')->filter(['id' => '[0-9]+']);*/