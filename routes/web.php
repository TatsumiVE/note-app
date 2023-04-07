<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogsController;

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

Route::resource("/blogs",BlogsController::class);
Route::resource("/post",PostController::class);

Route::get('/newblog',[BlogController::class,('index')])->name('newblog.index');
Route::get('newblog/create',[BlogController::class,('create')])->name('newblog.create');
Route::post('newblog/store',[BlogController::class,('store')])->name('newblog.store');
Route::get('newblog/show/{blog}',[BlogController::class,('show')])->name('newblog.show');
Route::get('newblog/edit/{blog}',[BlogController::class,('edit')])->name('newblog.edit');
Route::post('newblog/update/{blog}',[BlogController::class,('update')])->name('newblog.update');
Route::post('newblog/destroy/{blog}',[BlogController::class,('destroy')])->name('newblog.destroy');
