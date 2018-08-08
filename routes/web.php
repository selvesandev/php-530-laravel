<?php

Route::group(['namespace' => 'Frontend'], function () {
	Route::get('/', 'AppController@home');
	Route::get('/home', 'AppController@home')->name('home');
	Route::get('/about', 'AppController@about')->name('about');
	Route::get('contact', 'AppController@contact')->name('contact');
});


Route::group(['prefix' => 'admin', 'namespace' => 'Backend'], function () {

	Route::get('/', 'AdminController@index')->name('admin');
	Route::get('/add', 'AdminController@add')->name('add-admin');
	Route::post('/add', 'AdminController@addAction');
	Route::get('/delete/{id}', 'AdminController@delete')->name('delete-admin')->where('id', '[0-9]+');

	Route::get('/dashboard', 'DashboardController@index')->name('admin-dashboard');


});
