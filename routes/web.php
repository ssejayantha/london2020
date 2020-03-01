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


Route::get('/committee', function () {
    return view('committee');
});

Route::get('/abstract2020', function () {
    return view('abstracthome');
});

Route::get('/yga2020', function () {
    return view('ygahome');
});


Route::get('/program', function () {
    return view('program');
});

Route::get('/tours', function () {
    return view('tours');
});


Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/change-paswword', 'Auth\ChangePasswordController@index')->name('password.change');
Route::post('/change-paswword', 'Auth\ChangePasswordController@changepassword')->name('password.update');

Route::get('/abstract','HomeController@showUploadForm')->name('show.abstract');
Route::post('/abstract','HomeController@saveabsForm')->name('save.abstract');

Route::get('/profile','HomeController@profile')->name('profile');
Route::post('/profile','HomeController@updateAvatar')->name('avatar.profile');
Route::post('absdelete','HomeController@absdestroy')->name('absdelete');

Route::get('/yga','YgaController@index')->name('show.yga');
Route::post('/yga','YgaController@save')->name('save.yga');
Route::post('ygadelete','YgaController@delete')->name('yga.delete');