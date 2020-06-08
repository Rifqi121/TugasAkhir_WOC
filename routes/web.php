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

Route::get('/homepage','HomepageController@index');
Route::get('/data ', 'HomepageController@index1');
Route::get('/homepage/create', 'HomepageController@create');
Route::get('/cara', 'HomepageController@index2');
Route::get('education', 'HomepageController@index3');
Route::get('education', 'RSPageController@index');


Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
Route::post('/login','Auth\LoginController@login');
Route::post('/logout','Auth\LoginController@logout');
Route::get('/register','Auth\RegisterController@showRegisterForm');
Route::post('/register','Auth\RegisterController@register')->name('register');

Route::get('/edit','EditpageController@index');
Route::get('/edit/create', 'EditpageController@create');
Route::post('/edit','EditpageController@store');
Route::get('/edit/{id}/edit', 'EditpageController@edit');
Route::patch('/edit/{id}', 'EditpageController@update');
Route::delete('/edit/{id}', 'EditpageController@destroy');
