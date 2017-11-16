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
    return view('welcome');
});

Route::resource('data','DataController');
Route::resource('siswa','SiswaController');
Route::resource('mapel','MapelController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('data/index');
Route::get('/guru','DataController@index')->name('data/index');
Route::get('/siswa','SiswaController@index')->name('data2/index');
Route::get('/mapel','MapelController@index')->name('data3/index');
