<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
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

Route::get('/', [BooksController::class,'index']);

Route::get('/home',[BooksController::class,'index'])->name('home');
Route::get('/create_books',[BooksController::class,'create_books'])->name('create_books');
Route::get('/create',[BooksController::class,'create'])->name('create');
Route::get('/admin_index',[BooksController::class,'admin_index'])->name('admin_index');
Route::get('edit/{id}',[BooksController::class,'edit'])->name('edit');
Route::get('/delete/{id}',[BooksController::class,'delete'])->name('delete');
Route::get('/admin',[BooksController::class,'admin_index'])->name('admin');
Route::get('/edit_books/{id}',[BooksController::class,'edit_books'])->name('edit_books');
