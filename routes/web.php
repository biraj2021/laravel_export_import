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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', 'ImportExcelController@index');
Route::post('/import', 'ImportExcelController@import');
//Route::get('/import_excel', 'ImportExcelController@index');
//Route::post('/import_excel/import', 'ImportExcelController@import');
Route::get('/importToExcel', 'ImportController@importExcel');
