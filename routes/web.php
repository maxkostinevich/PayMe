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

// Payment Form
Route::get('/p/{uid}', 'PaymentFormController@show')->name('form.show');

Auth::routes(['verify' => true]);

Route::group(
    [
        'middleware' => ['verified'],
    ],
    function () {
        // Dashboard
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

        // Settings
        Route::get('/settings', 'SettingsController@edit')->name('settings.edit');
        Route::patch('/settings', 'SettingsController@update')->name('settings.update');
        Route::patch('/settings/password', 'SettingsController@updatePassword')->name('settings.update_password');
        Route::delete('/settings/avatar', 'SettingsController@deleteAvatar')->name('settings.delete_avatar');

        // Stripe oAuth
        Route::get('/stripe/oauth', 'StripeOAuthController@oauth')->name('stripe.oauth');
        Route::get('/stripe/authenticate', 'StripeOAuthController@authenticate')->name('stripe.authenticate');
        Route::post('/stripe/deactivate', 'StripeOAuthController@deactivate')->name('stripe.deactivate');

        // Forms
        Route::get('/forms', 'FormController@index')->name('forms.index');
        Route::get('/forms/create', 'FormController@create')->name('forms.create');
        Route::post('/forms/create', 'FormController@store')->name('forms.store');
        Route::get('/forms/{uid}', 'FormController@edit')->name('forms.edit');
        Route::patch('/forms/{form}', 'FormController@update')->name('forms.update');
        Route::delete('/forms/{uid}', 'FormController@destroy')->name('forms.destroy');
    });
