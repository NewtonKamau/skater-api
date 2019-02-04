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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//List users
Route::get('users', 'UsersController@index');

//Create a user
Route::post('user', 'UsersController@store');

//List a trick
Route::get('trick', 'TricksController@index');

//Create a trick
Route::post('trick', 'TricksController@store');

