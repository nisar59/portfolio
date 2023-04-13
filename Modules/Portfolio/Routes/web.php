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


Route::group(['prefix'=>'portfolio','middleware' => ['permission:portfolio.view']],function(){
	Route::get('/', 'PortfolioController@index');
});

Route::group(['prefix'=>'portfolio','middleware' => ['permission:portfolio.add']],function(){
	Route::get('/create', 'PortfolioController@create');
	Route::POST('/store', 'PortfolioController@store');

});
Route::group(['prefix'=>'portfolio','middleware' => ['permission:portfolio.edit']],function(){
	Route::get('/edit/{id}', 'PortfolioController@edit');
	Route::POST('/update/{id}', 'PortfolioController@update');
	 Route::get('status/{id}', 'PortfolioController@status');


});
Route::group(['prefix'=>'portfolio','middleware' => ['permission:portfolio.delete']],function(){
	Route::get('/destroy/{id}', 'PortfolioController@destroy');
});
