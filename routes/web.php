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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix'=>'superadmin','middleware'=>['superadmin','auth'],'namespace'=>'superadmin'],function() {

    Route::get('dashboard', 'DashboardController@index')->name('superadmin.dashboard');
});

Route::group(['prefix'=>'admin','middleware'=>['admin','auth'],'namespace'=>'admin'],function() {

    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
});

Route::group(['prefix'=>'advanceteacher','middleware'=>['advanceteacher','auth'],'namespace'=>'advanceteacher'],function(){

    Route::get('dashboard', 'DashboardController@index')->name('advanceteacher.dashboard');

});

Route::group(['prefix'=>'basicteacher','middleware'=>['basicteacher','auth'],'namespace'=>'basicteacher'],function(){

    Route::get('dashboard', 'DashboardController@index')->name('basicteacher.dashboard');

});
