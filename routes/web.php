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

Route::get('/', 'TodoController@show');
Route::get('new-todos', 'TodoController@create');
Route::post('store-todos', 'TodoController@store');  
Route::get('/{todo}', 'TodoController@view');
Route::get('/{todo}/edit', 'TodoController@edit');
Route::post('update-todos/{todo}', 'TodoController@update');  
Route::get('/{todo}/delete', 'TodoController@destroy');
Route::get('/{todo}/complete', 'TodoController@complete');

