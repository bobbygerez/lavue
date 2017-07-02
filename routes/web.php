<?php

/** AJAX ROUTES **/

Route::group(['prefix' => 'api'], function(){

	/** Locations **/
	Route::resource('countries', 'Country\CountryController');

	/** Products **/
	
	Route::post('login', 'Auth\LoginController@login');
	Route::post('phone/unique', 'Auth\RegisterController@phoneUnique');
	Route::post('email/unique', 'Auth\RegisterController@emailUnique');
	Route::get('main-categories', 'Nav\NavController@mainCategories');

	Route::get('category-products', 'Category\CategoryController@products');


});

Route::get('/', ['route' => 'home', 'uses' => 'Nav\NavController@home']);
Route::post('home', 'Nav\NavController@getUser');
//Registration Routes
Route::post('register', 'Auth\RegisterController@register');
Route::get('logout', 'Auth\LoginController@logout');