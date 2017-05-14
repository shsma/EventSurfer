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


Route::get('/', ['uses' => 'EventSurferController@getDashboardPage', 'as' => 'dashboard']);
Route::get('/search', ['uses' => 'EventSurferController@getSearchPage', 'as' => 'search']);
Route::get('/contact', ['uses' => 'EventSurferController@getContactPage', 'as' => 'contact']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
