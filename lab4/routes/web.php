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

Route::get(
        '/',
        [App\Http\Controllers\PagesController::class, 'home']
);

Route::get(
        '/posts',
        [App\Http\Controllers\PostsController::class, 'index']
);

Route::get(
        '/posts/{id}',
        [App\Http\Controllers\PostsController::class, 'show']
);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\Admin\PostsController::class, 'index']);
Route::get('/admin/posts/create', [App\Http\Controllers\Admin\PostsController::class, 'create']);
Route::post('/admin/posts', [App\Http\Controllers\Admin\PostsController::class, 'store']);

Route::get(
        '/posts/edit/{post}',
        [App\Http\Controllers\Admin\PostsController::class, 'edit']
)
        ->name('edit');

Route::put(
        '/posts/{id}',
        [App\Http\Controllers\Admin\PostsController::class, 'update']
)
        ->name('update');

Route::delete('/posts/{id}', [App\Http\Controllers\Admin\PostsController::class, 'destroy']);
