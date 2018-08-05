<?php


Route::get('/', 'AppController@home');

Route::get('/home', 'AppController@home')->name('home');

Route::get('/about', 'AppController@about')->name('about');

Route::get('contact', 'AppController@contact')->name('contact');

