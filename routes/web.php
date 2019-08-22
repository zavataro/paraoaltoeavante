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
Route::get('/', 'HomeController@index')->name('home');

Route::get('facebook', function () {
    return view('facebook');
});
Route::get('auth/facebook', 'Auth\LoginFacebookController@redirect');
Route::get('auth/facebook/callback', 'Auth\LoginFacebookController@callback');
