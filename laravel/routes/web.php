<?php

Route::get('/', 'PagesController@index');
Route::get('/index', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/logodesign', 'PagesController@logodesign');
Route::get('/webdesign', 'PagesController@webdesign');
Route::get('/digitalmarketing', 'PagesController@digitalmarketing');
Route::get('/ecommerce', 'PagesController@ecommerce');
Route::get('/webapp', 'PagesController@webapp');
Route::get('/pricing', 'PagesController@pricing');
Route::get('/portfolio', 'PagesController@portfolio');
Route::get('/contact', 'PagesController@contact');









Auth::routes();

