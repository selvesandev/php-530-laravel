<?php

use App\Models\User;

Route::get('console', function () {
	Artisan::call('down');
});


Route::get('/error', function () {
	abort(403, 'Unauthenticated');
});

Route::get('/log', function () {
	Log::info('test', ['id' => 2]);
});


Route::group(['namespace' => 'Frontend'], function () {
	Route::get('/', 'AppController@home');
	Route::get('/home', 'AppController@home')->name('home');
	Route::get('/about', 'AppController@about')->name('about');
	Route::get('contact', 'AppController@contact')->middleware('auth')->name('contact');
});


Route::group(['prefix' => Config::get('site.admin-dashboard'), 'namespace' => 'Backend'], function () {

	Route::get('/login', 'AdminAuthController@index')->name('admin-auth');
	Route::post('/login', 'AdminAuthController@loginAction');

	Route::get('/logout', 'AdminAuthController@logout')->name('admin-logout');

	Route::group(['middleware' => 'auth:admin'], function () {

		Route::group(['middleware' => 'superadmin'], function () {
			Route::get('/', 'AdminController@index')->name('admin');
			Route::get('/add', 'AdminController@add')->name('add-admin');
			Route::post('/add', 'AdminController@addAction');
			Route::get('/delete/{id}', 'AdminController@delete')->name('delete-admin')->where('id', '[0-9]+');
			Route::post('/update-status', 'AdminController@updateStatus')->name('update-status');
		});

		Route::get('/dashboard', 'DashboardController@index')->name('admin-dashboard');
		Route::get('update-profile', 'AdminController@updateProfile')->name('update-profile');
		Route::post('update-profile', 'AdminController@updateProfileAction');
		Route::post('update-password', 'AdminController@resetPassword')->name('update-password');

		Route::group(['prefix' => 'category'], function () {
			Route::get('list', 'CategoryController@index');
			Route::post('add', 'CategoryController@addAction');
			Route::get('delete/{id}', 'CategoryController@delete');
			Route::post('update-status', 'CategoryController@updateStatus');
		});

		Route::group(['prefix' => 'news'], function () {
			Route::get('list', 'NewsController@index')->name('news');
			Route::get('/add', 'NewsController@add')->name('news-add');
			Route::post('/add', 'NewsController@addAction');
			Route::post('update-priority', 'NewsController@updatePriority')->name('update-priority');

		});

	});


});


Route::get('/dev/{age}', 'DevController@checkMiddleware')->middleware('checkage');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('vuejs', 'HomeController@vue');