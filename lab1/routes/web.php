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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', '\App\Http\Controllers\PageController@index');
Route::get('/mine', '\App\Http\Controllers\PageController@mine');
Route::get('/timeline', '\App\Http\Controllers\PageController@timeline');
Route::get('/community', '\App\Http\Controllers\PageController@community');
Route::get('/newsletter', '\App\Http\Controllers\PageController@newsletter');