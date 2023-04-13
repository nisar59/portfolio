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

Route::group(['prefix'=>'experience','middleware' => ['permission:experience.view']],function(){
	Route::get('/', 'ExperienceController@index');
});

Route::group(['prefix'=>'experience','middleware' => ['permission:experience.add']],function(){
	Route::get('/create', 'ExperienceController@create');
	Route::POST('/store', 'ExperienceController@store');

});
Route::group(['prefix'=>'experience','middleware' => ['permission:experience.edit']],function(){
	Route::get('/edit/{id}', 'ExperienceController@edit');
	Route::POST('/update/{id}', 'ExperienceController@update');
    Route::get('status/{id}', 'ExperienceController@status');


});
Route::group(['prefix'=>'experience','middleware' => ['permission:experience.delete']],function(){
	Route::get('/destroy/{id}', 'ExperienceController@destroy');
});