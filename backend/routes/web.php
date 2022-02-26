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

Route::get('/', [DressController::class, 'index'])->name('dress.index');
Route::get('/show/{d_id}', [DressController::class, 'show'])->name('dress.show');
Route::get('/create', [DressController::class, 'create'])->name('dress.create');
Route::post('/store', [DressController::class, 'store'])->name('dress.store');

// require __DIR__.'/auth.php';