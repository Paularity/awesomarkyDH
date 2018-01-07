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

Auth::routes();



//For Front End
Route::get('/', 'FrontEndController@getHome');
Route::get('departments', 'FrontEndController@getDepartments');
Route::get('doctors', 'FrontEndController@getDoctors');
Route::get('about-us', 'FrontEndController@getAboutus');
