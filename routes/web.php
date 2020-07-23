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

//Route dashboard
Route::get('/', 'DashboardController@index');


//Route tabel data artikel
Route::get('/artikel', 'ArtikelController@index');

Route::get('/artikel/create', 'ArtikelController@create');

Route::post('/artikel', 'ArtikelController@store');

Route::get('/artikel/edit/{id}', 'ArtikelController@edit');

Route::patch('/artikel/{id}', 'ArtikelController@update');

Route::get('/artikel/{id}', 'ArtikelController@destroy');

//Route tabel data kategori
Route::get('/kategori', 'KategoriController@index');

Route::get('/kategori/create', 'KategoriController@create');

Route::post('/kategori', 'KategoriController@store');

Route::get('/kategori/edit/{id}', 'KategoriController@edit');

Route::patch('/kategori/{id}', 'KategoriController@update');

Route::get('/kategori/{id}', 'KategoriController@destroy');
