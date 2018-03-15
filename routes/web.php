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

Route::resource('Verify', 'VerifyController');
Route::get('/', ['as'=>'crypto_home', 'uses'=>'CryptoController@index']);
Route::get('/About', ['as'=>'crypto_about', 'uses'=>'CryptoController@about']);
Route::get('/Contact', ['as'=>'crypto_contact', 'uses'=>'CryptoController@contact']);
Route::get('/Services', ['as'=>'crypto_services', 'uses'=>'CryptoController@services']);

//Google2FALaravel
Route::get('/complete-registration', 'Auth\RegisterController@completeRegistration');
Route::post('/2fa', function () {
    return redirect(URL()->previous());
})->name('2fa')->middleware('2fa');


Auth::routes();

/* Dashboard Controllers */
Route::group(['middleware'=>'adminuser'], function() {
  Route::get('/Dashboard', ['as'=>'cryptoDashboard', 'uses'=>'DashboardController@index']);
  Route::resource('adminusers', 'AdminController');
});

//Route::get('/home', 'HomeController@index')->name('home');
