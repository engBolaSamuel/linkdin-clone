<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // السطر الجديد – البروفايل شغال 100%
    Route::get('/profile/{user:username}', function () {
        return view('profile.show', ['user' => request()->route('user')]);
    })->name('profile.show');
});
