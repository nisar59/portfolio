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

Route::group(['prefix'=>'education','middleware' => ['permission:education.view']],function(){
	Route::get('/', 'EducationController@index');
});

Route::group(['prefix'=>'education','middleware' => ['permission:education.add']],function(){
	Route::get('/create', 'EducationController@create');
	Route::POST('/store', 'EducationController@store');

});
Route::group(['prefix'=>'education','middleware' => ['permission:education.edit']],function(){
	Route::get('/edit/{id}', 'EducationController@edit');
	Route::POST('/update/{id}', 'EducationController@update');
	Route::get('status/{id}', 'EducationController@status');


});
Route::group(['prefix'=>'education','middleware' => ['permission:education.delete']],function(){
	Route::get('/destroy/{id}', 'EducationController@destroy');
});