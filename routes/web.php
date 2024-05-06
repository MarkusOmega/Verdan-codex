<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// USER CRUD
Route::middleware(['auth','can:view_user'])->group(function () {
    Route::resource('users', UserController::class);

    Route::get('/{user}/deactivate', [UserController::class, 'Deactivate'])->name('users.deactivate');
    Route::get('/{user}/activate', [UserController::class, 'Activate'])->name('users.activate');
});


Route::middleware('auth:web')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
