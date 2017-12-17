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

Route::get('/','AlbumsController@index');
Route::get('/albums','AlbumsController@index');
Route::get('/albums/create','AlbumsController@create');
Route::post('/albums/store',['as'=>'store.post','uses'=>'AlbumsController@store']);
Route::get('/albums/{id}','AlbumsController@show');
Route::get('/photos/create/{id}','PhotoController@create');

