<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LecturerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/user', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'role:admin'])->name('user');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::name('lecturer.')
    ->prefix('lecturer')
    ->middleware(['auth', 'role:admin'])
    ->group(function (){
        Route::get('/', [LecturerController::class, 'index'])->name('index');
    });

require __DIR__.'/auth.php';
