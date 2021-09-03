<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Route::get('/game_page', 'HomeController@game');
Route::get('/leaderboards', 'UserController@index');

Route::get('/edit_user', 'UserController@editUser');
Route::get('/show_user', 'UserController@show');
Route::put('/user/{user}/update', 'UserController@update');
Route::delete('/user/{user}/delete', 'UserController@delete');

Route::get('/game_page', 'TriviaController@questions')->middleware('auth');
Route::post('/show_results', 'TriviaController@showResults');
Route::put('/user_points_update', 'UserController@updatePoints');
