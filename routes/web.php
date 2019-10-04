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
    return view('app');
});
Route::get('/test', 'GetListContent@getAllAuto');
Route::get('/getCategory', 'CategoryController@index');


Route::get('/{any}', 'SpaController@index')->where('any', '.*');
