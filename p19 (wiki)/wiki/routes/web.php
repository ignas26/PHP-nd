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

Route::get('/', 'Controller@index')->name('main');

Route::post('/data/store', 'Controller@store')->name('save_data');



//Route::get('/',function(){
//    return view('layout.main');
//});
//
//Route::get('/', function(){
//    return view('atskiras.index');
//});
//
//Route::get('atskiras.index', function(){
//    return view('atskiras.danger');
//});
