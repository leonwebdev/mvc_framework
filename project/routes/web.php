<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

/*
 ---------  Normal User Routes -------------------------------------------
 */

Route::get('/phones/index', "App\Http\Controllers\PhonesController@index");
Route::get('/phones/{id}', "App\Http\Controllers\PhonesController@show");
Route::get('/', function () {
    $title = 'Home';
    return view('home', compact('title'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*
 ---------  Admin User Routes -------------------------------------------
 */

Route::get('/admin', "App\Http\Controllers\Admin\PhonesController@index");
Route::get('/admin/create', "App\Http\Controllers\Admin\PhonesController@create");
Route::post('/admin', "App\Http\Controllers\Admin\PhonesController@store");
Route::get('/admin/edit/{id}', "App\Http\Controllers\Admin\PhonesController@edit")->name('edit');
Route::put('/admin/{id}', "App\Http\Controllers\Admin\PhonesController@update")->name('update');
Route::delete('/admin/{id}', "App\Http\Controllers\Admin\PhonesController@destroy");