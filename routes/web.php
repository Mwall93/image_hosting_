<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('/posts/index');

});

//Posts Controller
//Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts', 'PostsController@index')->name('home');
Route::get('/posts/{post}', 'PostsController@show');

//Registration Controller
Route::post('/register', 'RegistrationController@store');
Route::get('/register', 'RegistrationController@index');

//Sessions controller
Route::get('/login', 'SessionsController@create');
Route::get('/logout', 'SessionsController@destroy');
Route::post('/login', 'SessionsController@store');