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
    return redirect()->route('home');
});

Auth::routes();

Route::post('/login/{username}/{password}', 'Auth\LoginController@appLogin');

Route::get('/vision', 'PagesController@getVision')->name('vision');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/givebright/{id}', 'PointController@getGiveBright')->name('bright.get');
Route::post('/givebright/{id}', 'PointController@postGiveBright')->name('bright.give');
Route::get('/users', 'UserController@listUsers')->name('users');
