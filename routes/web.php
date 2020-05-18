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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/livre', 'LivreController@index')->name('livre');
route::get('/edit/{id}','LivreController@edit')->name('edit');
route::get('/show/{id}','LivreController@show')->name('show');
route::get('/create','LivreController@create')->name('create');
route::post('/update/{id}','LivreController@update')->name('update');
route::delete('/destroy/{id}','LivreController@destroy')->name('destroy');
Route::post('/livresave', 'LivreController@store')->name('livresave');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
