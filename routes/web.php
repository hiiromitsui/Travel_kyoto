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

    
Route::get('/', 'SpotController@index')->name('spot.index');

Route::post('/', 'SpotController@search')->name('spot.search');



Route::group(['middleware' => 'auth'], function() {
      Route::get('spot/create', 'SpotController@create')->name('spot.create');
      Route::post('spot/create', 'SpotController@store')->name('spot.create');
});
Auth::routes();


