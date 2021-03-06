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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/planets', 'PlanetController@index')->name('planets');
Route::get('/starships', 'StarshipController@index')->name('starships');

Route::post('/planets/show', 'PlanetController@show')->name('planet/show');
Route::post('/starships/show', 'StarshipController@show')->name('starship/show');

Route::post('/planets/store', 'PlanetController@store')->name('planet/store');
Route::post('/starships/store', 'StarshipController@store')->name('starship/store');

Route::get('/saved', 'SavedController@index')->name('saved');

Route::post('/planet/destroy', 'PlanetController@destroy')->name('planet/destroy');
Route::post('/starships/destroy', 'StarshipController@destroy')->name('starships/destroy');