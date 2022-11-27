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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sample', 'HomeController@sample')->name('sample');
Route::get('/edit','ProfileController@edit')->name('profile.edit');
Route::post('/change-password','ProfileController@changePassword')->name('profile.changePassword');
Route::post('/change-name','ProfileController@changeName')->name('profile.changeName');
Route::post('/change-email','ProfileController@changeEmail')->name('profile.changeEmail');
Route::post('/change-photo','ProfileController@changePhoto')->name('profile.changePhoto');
