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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('users');
});

Route::get('users/pdf', 'App\Http\Controllers\PdfController@index');

Route::get('users/export/', 'App\Http\Controllers\UserController@export');

Route::get('export/pdf', 'App\Http\Controllers\PdfController@export');
 
