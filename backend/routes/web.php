<?php declare(strict_types=1);

use App\Http\Controllers\DressController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DressController::class, 'index'])->middleware(['auth'])->name('dress.index');
Route::get('/show/{d_id}', [DressController::class, 'show'])->name('dress.show');
Route::get('/create', [DressController::class, 'create'])->name('dress.create');
Route::post('/store', [DressController::class, 'store'])->name('dress.store');

require __DIR__.'/auth.php';
