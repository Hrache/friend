<?php

/*
 | Web Routes
 |--------------------------------------------------------------------------
 |--------------------------------------------------------------------------
 |
 | Here is where you can register web routes for your application. These
 | routes are loaded by the RouteServiceProvider within a group which
 | contains the "web" middleware group. Now create something great!
 |
 */
Auth::routes();

Route::resource('categories', "CategoriesController");

Route::middleware('auth')->group(function() {
	Route::post('/checksession', function()	{
		return Auth::check()? 1: 0;
	})->name('checksession');
});

Route::get('/', 'CategoriesController@index')->name('home');
Route::get('locale/{lang}', 'CommonController@setLocale')->name('lang');
Route::post('/account/activate', "CommonController@store")->name('email');