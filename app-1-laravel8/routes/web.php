<?php

use App\Http\Controllers\{
    PostController
};
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

Route::get(   '/posts/create',  [PostController::class, 'create'])->name('posts.create');
Route::get(   '/posts',         [PostController::class, 'index'])->name('posts.index');
Route::post(  '/posts',         [PostController::class, 'store'])->name('posts.store');
Route::get(   '/post/{id}',     [PostController::class, 'show'])->name('post.show');
Route::delete('/post/{id}',     [PostController::class, 'destroy'])->name('post.destroy');
Route::get(   '/post/edit/{id}',[PostController::class, 'edit'])->name('post.edit');
Route::put(   '/post/{id}'  ,   [PostController::class, 'update'])->name('post.update');
Route::any(   '/posts/search'  ,[PostController::class, 'search'])->name('post.search');

Route::get('/', function () {
    return view('welcome');
});
