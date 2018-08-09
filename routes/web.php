<?php

Route::group(['namespace' => 'Frontend'], function () {
	Route::get('/', 'AppController@home');
	Route::get('/home', 'AppController@home')->name('home');
	Route::get('/about', 'AppController@about')->name('about');


	Route::get('contact', 'AppController@contact')->middleware('auth')->name('contact');
});


Route::group(['prefix' => Config::get('site.admin-dashboard'), 'namespace' => 'Backend'], function () {

	Route::get('/login', 'AdminAuthController@index')->name('admin-auth');
	Route::post('/login', 'AdminAuthController@loginAction');

	Route::group(['middleware' => 'auth:admin'], function () {
		Route::get('/', 'AdminController@index')->name('admin');
		Route::get('/add', 'AdminController@add')->name('add-admin');
		Route::post('/add', 'AdminController@addAction');
		Route::get('/delete/{id}', 'AdminController@delete')->name('delete-admin')->where('id', '[0-9]+');
		Route::post('/update-status', 'AdminController@updateStatus')->name('update-status');
		Route::get('/dashboard', 'DashboardController@index')->name('admin-dashboard');
	});


});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
