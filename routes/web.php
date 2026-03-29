<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TokenController;

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
Route::post('/admin/update/{id}', [AdminController::class, 'updateStatus'])->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // PROFILE
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // TOKEN ROUTES
    Route::get('/tokens', [TokenController::class, 'index'])->name('tokens.index');
    Route::get('/tokens/create', [TokenController::class, 'create'])->name('tokens.create');
    Route::post('/tokens', [TokenController::class, 'store'])->name('tokens.store');

    // ✏️ EDIT / DELETE
    Route::get('/tokens/edit/{id}', [TokenController::class, 'edit']);
    Route::post('/tokens/update/{id}', [TokenController::class, 'update']);
    Route::post('/tokens/delete/{id}', [TokenController::class, 'destroy']);
});

require __DIR__.'/auth.php';