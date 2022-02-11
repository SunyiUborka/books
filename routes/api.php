<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/books', [\App\Http\Controllers\BookController::class, 'index'])->name('books.index');
Route::get('/books/{isbn}', [\App\Http\Controllers\BookController::class, 'show'])->name('books.show');
Route::post('/books', [\App\Http\Controllers\BookController::class, 'store'])->name('books.store');
Route::put('/books/{isbn}', [\App\Http\Controllers\BookController::class, 'update'])->name('books.update');
Route::delete('/books/{isbn}', [\App\Http\Controllers\BookController::class, 'destroy'])->name('books.destroy');
