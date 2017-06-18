<?php

/** AJAX ROUTES **/

Route::group(['prefix' => 'api'], function(){

	/** Locations **/
	Route::get('regions', 'LocationController@region');
	Route::get('provinces/{region_id}', 'LocationController@regionProvinces');
	Route::get('provinces', 'LocationController@provinceAll');
	Route::get('cities', 'LocationController@cityAll');
	Route::get('cities/{province_id}', 'LocationController@provinceCities');
	Route::get('barangays/{cityCode}', 'LocationController@cityBarangay');

	/** Products **/
	
	Route::post('login', 'Auth\LoginController@login');
	Route::post('phone/unique', 'Auth\RegisterController@phoneUnique');
	Route::post('email/unique', 'Auth\RegisterController@emailUnique');
	Route::get('main-categories', 'Nav\NavController@mainCategories');


});

Route::get('/', ['route' => 'home', 'uses' => 'Nav\NavController@home']);

//Registration Routes
Route::post('register', 'Auth\RegisterController@register');
Route::get('logout', 'Auth\LoginController@logout');