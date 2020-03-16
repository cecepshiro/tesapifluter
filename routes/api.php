<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Auth
Route::group(['prefix' => 'auth'], function () {
    Route::post('/login', 'API\UsersController@login');
    Route::post('/register', 'API\UsersController@register');
    Route::get('/logout', 'API\UsersController@logout')->middleware('auth:api');
});

//Biodata
Route::group(['prefix' => 'biodata'], function () {
    Route::get('/index', 'API\BiodataController@index');
    Route::post('/store', 'API\BiodataController@store');
    Route::get('/show/{id}', 'API\BiodataController@show');
    Route::get('/edit/{id}', 'API\BiodataController@edit');
    Route::post('/update/{id}', 'API\BiodataController@update');
    Route::get('/destroy/{id}', 'API\BiodataController@destroy');
});
