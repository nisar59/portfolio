<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix'=>'services','middleware' => ['permission:services.view']],function(){
	Route::get('/', 'ServicesController@index');
});

Route::group(['prefix'=>'services','middleware' => ['permission:services.add']],function(){
	Route::get('/create', 'ServicesController@create');
	Route::POST('/store', 'ServicesController@store');

});
Route::group(['prefix'=>'services','middleware' => ['permission:services.edit']],function(){
	Route::get('/edit/{id}', 'ServicesController@edit');
	Route::POST('/update/{id}', 'ServicesController@update');
	 Route::get('status/{id}', 'ServicesController@status');


});
Route::group(['prefix'=>'services','middleware' => ['permission:services.delete']],function(){
	Route::get('/destroy/{id}', 'ServicesController@destroy');
});