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
Route::middleware(['can:view_user'])->group(function () {
    Route::resource('users', UserController::class);

    Route::get('/{user}/deactivate', [UserController::class, 'deactivate'])->name('users.deactivate');
    Route::get('/{user}/activate', [UserController::class, 'activate'])->name('users.activate');

});

Route::middleware(['can:impersonate_user'])->group(function () {
    Route::get('/{user}/impersonate', [UserController::class, 'impersonate'])->name('users.impersonate');
});


Route::middleware('auth:web')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
