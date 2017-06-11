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
	

	/** Categories **/
	Route::get('main-categories', 'Nav\NavController@mainCategories');


});

Route::get('/', ['route' => 'home', 'uses' => 'NavController@home']);

Route::group(['prefix' => 'browse'], function(){

	Route::get('{maincategory}/{maincategory_id}', 'NavController@mainCategories');
	Route::get('{maincategory}/{merchantcategory}/{merchantcategory_id}', 'NavController@merchantCategories');
	Route::get('{maincategory}/{merchantcategory}/{merchantsub}/{merchantsub_id}', 'NavController@merchantSubcategories');
});

Route::get('sample', function(){

	$img = Img::make( 'images/uploads/' . rand(1,67) . '.jpg' )->resize(200, 238, function($constraint){

		$constraint->aspectRatio();
    	$constraint->upsize();
	});

	dd(base_url().$img->response());
});

Route::get('vuejs', function(){

	return view('vuejs.index');
});