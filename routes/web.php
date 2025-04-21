<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('posts.index');
    }
    return view('welcome');
});

Route::middleware(['guest'])->group(function () {   
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('posts', PostController::class);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});