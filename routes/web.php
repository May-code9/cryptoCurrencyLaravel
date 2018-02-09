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

Route::get('/', ['as'=>'crypto_home', 'uses'=>'CryptoController@index']);
Route::get('/About', ['as'=>'crypto_about', 'uses'=>'CryptoController@about']);
Route::get('/Contact', ['as'=>'crypto_contact', 'uses'=>'CryptoController@contact']);
Route::get('/Services', ['as'=>'crypto_services', 'uses'=>'CryptoController@services']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
