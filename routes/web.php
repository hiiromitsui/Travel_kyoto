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


//Route::post('/', 'SpotController@search')->name('spot.search');
Route::get('/', 'SpotController@search')->name('spot.search');


Route::get('/', 'SpotController@index')->name('spot.index');


Route::group(['middleware' => 'auth'], function() {
    Route::get('spot/create', 'SpotController@create')->name('spot.create');
    Route::post('spot/create', 'SpotController@store')->name('spot.create');
    Route::get('spots/{id}/edit', 'SpotController@edit')->name('spots.edit'); // 編集画面
    Route::put('spots/{id}/update', 'SpotController@update')->name('spots.update');

});
Route::get('/spots/{id}', 'SpotController@show')->name('spots.show');
Auth::routes();



