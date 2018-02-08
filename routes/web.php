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

Route::get('/', 'PersonController@index')->name('crud');

Route::get('/add/{id?}','PersonController@edit')->name('add');

Route::post('/add', 'PersonController@store')->name('add_post');

Route::post('/delete', 'PersonController@delete')->name('person_delete');

