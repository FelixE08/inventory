<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RandomController;
use Illuminate\Support\Facades\Route;


/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [PageController::class, 'index']);

Route::get('/index', [PageController::class, 'index'])->name('index');

Route::get('/about', [PageController::class, 'about']);

Route::get('/me', [PageController::class, 'me']);

Route::get('/impressum', [PageController::class, 'impressum']);

Route::get('/contact', [PageController::class, 'contact'])
    ->name('pages.contact');

// /info/1
Route::get('/info/{id}', [PageController::class, 'info']);

Route::get('/items', [ItemController::class, 'index']);

Route::get('/random-student', [RandomController::class, 'select']);

