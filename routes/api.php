<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group([
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('payload', 'AuthController@payload');

});

Route::group([
    'prefix' => 'garbage-officers'

], function ($router) {

    Route::post('login', 'GarbageOfficerController@login');
    Route::post('logout', 'GarbageOfficerController@logout');
    Route::post('refresh', 'GarbageOfficerController@refresh');
    Route::post('me', 'GarbageOfficerController@me');
    Route::post('payload', 'GarbageOfficerController@payload');

});

Route::group([
    'prefix' => 'customers'

], function ($router) {

    Route::post('login', 'CustomerController@login');
    Route::post('logout', 'CustomerController@logout');
    Route::post('refresh', 'CustomerController@refresh');
    Route::post('me', 'CustomerControllerController@me');
    Route::post('payload', 'CustomerrControllerController@payload');

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources(['admins' => 'API\AdminController']);

