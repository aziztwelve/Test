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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@add')->name('add');
Route::get('/', 'PostController@show')->name('post');



Route::get('google', function () {

    return view('googleAuth');

});

Route::get('auth/google', 'Auth\LoginController@redirectToGoogle')->name('google');

Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');
