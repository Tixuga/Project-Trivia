<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/gamePage', 'HomeController@game')->name('gamePage');
Route::get('/tutorial', 'HomeController@tutorial')->name('tutorial');
Route::get('/leaderboards', 'UserController@index')->name('leaderboards');
Route::get('/editUser', 'UserController@editUser')->name('editUser');
Route::get('/showUser', 'UserController@show')->name('show');
Route::put('/user/{user}/update', 'UserController@update');
Route::delete('/user/{user}/delete', 'UserController@delete');

Route::get('/gamePage', 'TriviaController@questions');
