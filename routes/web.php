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

Route::get('/', 'HomeController@index');

Route::get('/home', 'ViewController@show');
Route::get('/add', 'ViewController@create');
Route::get('/edit/{id}', 'ViewController@edit');
Route::post('/store', 'ViewController@store');
Route::post('/update/{id}','ViewController@update');
Route::get('/hapus/{id}', 'ViewController@destroy');




Auth::routes();

Route::get('/home', 'HomeController@index');
