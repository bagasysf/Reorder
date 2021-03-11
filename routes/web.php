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
    return view('dashboard');
});

Route::get('/category', 'CategoryController@index');
Route::post('/category', 'CategoryController@store');
Route::get('/category/{id}/edit', 'CategoryController@edit');
Route::put('/category/{id}', 'CategoryController@update');
Route::delete('/category/{id}', 'CategoryController@destroy');

Route::get('/product', 'ProductController@index');
Route::post('/product', 'ProductController@store');
