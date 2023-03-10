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

Route::get('/phones/index', "App\Http\Controllers\PhonesController@index");
Route::get('/phones/{id}', "App\Http\Controllers\PhonesController@show");
Route::get('/', function () {
    $title = 'Home';
    return view('home', compact('title'));
});