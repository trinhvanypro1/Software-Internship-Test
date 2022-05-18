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
Route::get('/home', function () {
    return view('home');
});
Route::get('/add-information', function () {
    return view('add_inf');
});
Route::get('/add-info','InfoController@add_info_nav');
Route::get('/all-info','InfoController@all_info_nav');
Route::get('/delete-info/{id}','InfoController@delete_info');
Route::post('/save-info','InfoController@save_info');
