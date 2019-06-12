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

// Frontend pages
Route::get('/', 'PageController@home');
Route::get('/terms', 'PageController@terms');
Route::get('/privacy', 'PageController@privacy');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
