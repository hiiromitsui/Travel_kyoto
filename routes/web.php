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

 Route::get('/', function () {
     return view('common');
 });
  Route::get('/home', 'HomeController@index')->name('home');

  Auth::routes();
    
Route::get('/', 'SpotController@index')->name('spot.index');




// Route::get('/','UserController@show')->name('users.show');

// Route::get('/show', 'UserController@show')->name('show');

// Route::get('user/{id}', 'MypageController@index')->name('mypage');
//  Route::get('user/{id}', 'MypageController@show')->name('mypage');


Route::group(['middleware' => 'auth'], function() {
      Route::get('spot/create', 'SpotController@create')->name('spot.create');
      Route::post('spot/create', 'SpotController@store')->name('spot.create');
      Route::get('user/{id}', 'MypageController@mypage')->name('users.mypage');
      
      Route::get('user/{id}/edit', 'MypageController@edit')->name('users.edit'); // 編集画面
      
      Route::put('user/{id}/update', 'MypageController@update')->name('users.update');
});
Auth::routes();



