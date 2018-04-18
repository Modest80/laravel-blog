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

Route::group(['prefix' => 'prof', 'namespace' => 'Prof', 'middleware' => ['auth']], function() {
  Route::get('/', 'ProfileAdminController@dashboard')->name('prof.index');
  Route::resource('/category', 'CategoryController', ['as'=>'prof']);
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
