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

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/garbage_officer', 'Auth\LoginController@showGarbageOfficerLoginForm');
Route::get('/register/garbage_officer', 'Auth\RegisterController@showGarbageOfficerRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/garbage_officer', 'Auth\LoginController@garbageofficerLogin');
Route::post('/register/garbage_officer', 'Auth\RegisterController@createGarbageOfficer');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/garbage_officer', 'garbage_officer');

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
