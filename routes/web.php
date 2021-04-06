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

Route::view('/', 'layout');
Route::view('contact', 'contact');
Route::view('apropos', 'apropos');
//Route::view('layout', 'layout');
Route::get('clients', 'App\Http\Controllers\ClientsController@list');
Route::post('/clients', 'App\Http\Controllers\ClientsController@store');