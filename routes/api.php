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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::group(['prefix' => 'blog'], function () {
	Route::post('/', 'ApiController@insert');
	Route::get('/', 'ApiController@select');
	Route::post('/update/{id}', 'ApiController@update');
	Route::get('/delete/{id}', 'ApiController@delete')->where('id', '[0-9]+');
});


Route::group(['prefix' => 'users'], function () {
//	Route::get('delete');
});
