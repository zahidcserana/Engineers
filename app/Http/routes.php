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

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/profile',['as'=>'profile','uses'=>'HomeController@ViewProfile']);
Route::post('/profile_update',['as'=>'profile_update','uses'=>'HomeController@UpdateProfile']);

Route::post('/image_upload',['as'=>'image_upload','uses'=>'HomeController@ImageUpload']);

Route::get('/users',['as'=>'users','uses'=>'HomeController@Users']);

Route::get('/user_details/{id}',['as'=>'user_details','uses'=>'HomeController@UserDetails']);


Route::get('/student_view',['as'=>'student_view','uses'=>'StudentController@StudentView']);
Route::get('/student_add',['as'=>'student_add','uses'=>'StudentController@StudentAdd']);