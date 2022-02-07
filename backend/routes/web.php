<?php

use App\Http\Controllers\DressController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('dress', [DressController::class, 'index']);
// Route::resource('posts', PostController::class)->except(['index']);

// require __DIR__.'/auth.php';
