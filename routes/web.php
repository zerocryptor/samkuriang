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

Route::get('/login/garbage_officer', 'Auth\LoginController@showGarbageOfficerLoginForm');
Route::get('/register/garbage_officer', 'Auth\RegisterController@showGarbageOfficerRegisterForm');
Route::post('/login/garbage_officer', 'Auth\LoginController@garbageofficerLogin');
Route::post('/register/garbage_officer', 'Auth\RegisterController@createGarbageOfficer');

Auth::routes();

Route::get('/garbage_officer', 'GarbageOfficerController@index')->name('home_garbage_officer');
Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/home', 'HomeController@index')->name('home');
