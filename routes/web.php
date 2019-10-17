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
Route::get('', function () {
    return view('index');
});
Route::resource('products','ProductController');
Route::resource('game','GuessController');
Route::resource('board','BoardController');
Route::resource('login','LoginController');
Route::post('login/index','LoginController@index')->name('login.index');

