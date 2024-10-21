<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;

// layout
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/base', function () {
    return view('base');
});

// akses controller
Route::get('/student', [StudentController::class, 'index']);
Route::resource('lecturer', LecturerController::class);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::redirect('/test-app', '/test');

// Route::get('/test1/{name}', function ($name) {
//     return "Welcome, ". $name;
// });

Route::get('/test2/{name?}', function ($name = null) {
    if($name ==  null) {
        return "Hello there..";
    } else {
        return "Welcome, ". $name;
    }
});

Route::post('/test', function () {
    return view('test');
})->name('post.data');

Route::prefix('user')
    ->group(function() {
        Route::get('/test1/{name}', function ($name) {
            return "Welcome, ". $name;
        }); // localhost:8000/user/test1/name
    });