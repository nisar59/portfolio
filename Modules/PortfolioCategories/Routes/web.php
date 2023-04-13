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

Route::group(['prefix'=>'portfolio-categories','middleware' => ['permission:portfolio-categories.view']],function(){
	Route::get('/', 'PortfolioCategoriesController@index');
});

Route::group(['prefix'=>'portfolio-categories','middleware' => ['permission:portfolio-categories.add']],function(){
	Route::get('/create', 'PortfolioCategoriesController@create');
	Route::POST('/store', 'PortfolioCategoriesController@store');

});
Route::group(['prefix'=>'portfolio-categories','middleware' => ['permission:portfolio-categories.edit']],function(){
	Route::get('/edit/{id}', 'PortfolioCategoriesController@edit');
	Route::POST('/update/{id}', 'PortfolioCategoriesController@update');
	Route::get('status/{id}', 'PortfolioCategoriesController@status');


});
Route::group(['prefix'=>'portfolio-categories','middleware' => ['permission:portfoliocategories.delete']],function(){
	Route::get('/destroy/{id}', 'PortfolioCategoriesController@destroy');
});