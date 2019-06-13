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
Route::get('/', 'PageController@home')->name('page.home');
Route::get('/terms', 'PageController@terms')->name('page.terms');
Route::get('/privacy', 'PageController@privacy')->name('page.privacy');

Auth::routes(['verify' => true]);

Route::group(
    [
        'middleware' => ['verified'],
    ],
    function () {
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

        Route::get('/settings', 'SettingsController@edit')->name('settings.edit');
        Route::patch('/settings', 'SettingsController@update')->name('settings.update');
        Route::patch('/settings/password', 'SettingsController@updatePassword')->name('settings.update_password');
        Route::delete('/settings/avatar', 'SettingsController@deleteAvatar')->name('settings.delete_avatar');
    });
