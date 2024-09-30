<?php

use Illuminate\Support\Facades\Route;

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