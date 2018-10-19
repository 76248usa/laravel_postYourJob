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

Route::get('admin', function(){
    return view('admin.index');
});

Route::resource('admin/users', 'AdminUsersController');

//Route::get('profile', 'AdminUsersController@profile');
//Route::post('profile', 'AdminUsersController@update_avatar');

//Route::get('profile', 'AdminUsersController@profile')->name('profile');
//Route::post('profile', 'AdminUsersController@update_avatar')->name('profile');



