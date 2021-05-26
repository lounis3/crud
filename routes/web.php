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

Route::get('/', 'App\Http\Controllers\ClienteController@index')->name('inicio');
Route::get('/crear', 'App\Http\Controllers\ClienteController@create')->name('agregar');
Route::get('/agregar', 'App\Http\Controllers\ClienteController@store')->name('store');
Route::get('/mostrar', 'App\Http\Controllers\ClienteController@show')->name('show');
Route::delete('/borrar/{dni}', 'App\Http\Controllers\ClienteController@destroy')->name('destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
