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


Route::get('/', 'PagesController@index');

Auth::routes();


//Route::get('/', function () {
    //return view('welcome');
//});

//Route::get('/', 'CategoriesController@index');

Route::resource('pages','PagesController');

Route::resource('categories','CategoriesController');

Route::get('admin/index', 'AdminController@index')->name('admctrl');

Route::post('search','PagesController@search')->name('search');