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
Route::get('register/garbage_/officer', 'Auth\RegisterController@showGarbageOfficerRegisterForm');
Route::post('/login/garbage_officer', 'Auth\LoginController@garbageofficerLogin');
Route::post('/register/garbage_officer', 'Auth\RegisterController@createGarbageOfficer');
Route::put('/garbage_officer/approve/{id}', 'Auth\VerificationController@updateGarbageOfficer');
Route::put('/admin/approve/{id}', 'Auth\VerificationController@approveGarbageOfficer');

Auth::routes(['verify' => true]);

Route::get('/garbage_officer', 'GarbageOfficerController@index')->name('home_garbage_officer');
Route::get('/garbage_officer/customers', 'GarbageOfficerController@customers')->name('customers_garbage_officer-cust');
Route::get('/garbage_officer/customers/edit', 'GarbageOfficerController@editCust')->name('edit_garbage_officer-cust');
Route::get('/garbage_officer/garbages/edit', 'GarbageOfficerController@editGarbage')->name('edit_garbage_officer-garbage');
Route::get('/garbage_officer/garbages/create', 'GarbageOfficerController@createGarbage')->name('create_garbage_officer-garbage');
Route::get('/garbage_officer/customers/detail', 'GarbageOfficerController@detailCust')->name('detail_garbage_officer-cust');

Route::resource('garbage_officer','GarbageOfficerController');

// admin
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/garbage-banks/list', 'AdminController@garbageBankList')->name('admin-garbage-bank');
Route::get('/admin/customers/list', 'AdminController@customerList')->name('admin-customer');


// Route::get('/home', 'HomeController@index')->name('home');
