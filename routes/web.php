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

Route::get('/', 'KultumController@home');

Route::get('/about', function () {
    return view('layouts.about');
})->middleware('auth');

Route::resource('/santri', 'SantriController')->middleware('auth');

Route::resource('/users', 'UsersController')->middleware('auth');

Route::resource('/kultum', 'KultumController');

Route::get('/profile', 'UsersController@show');

Route::get('/filter', 'KultumController@filter');

Route::get('/search', 'KultumController@search');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
