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

Auth::routes();

Route::get('/', 'HomeController@index');

/**
 * Routing for Admin Panel
 */
Route::prefix('admin')->group(function () {
    Route::get('/', 'HomeController@indexAdmin')->name('admin.home');
    Route::resource('property_type', 'PropertyTypeController');
    Route::resource('property', 'PropertyController');
    Route::resource('sponsored_property', 'SponsoredPropertyController');
});

/**
 * Routing to Main Page
 */
Route::get('about', 'AboutController@indexUser')->name('about');
Route::get('property', 'PropertyController@indexUser')->name('property');
Route::get('contact', 'ContactController@indexUser')->name('contact');

