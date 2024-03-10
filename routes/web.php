<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('layout');
});

// All posts
Route::get('/', [PostController::class, 'index']);

// Manage posts
Route::get('/posts/manage', [PostController::class, 'manage'])->middleware('auth');

// Show create form
Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth');

// Store post
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');

// Show edit form
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->middleware('auth');

// Update post
Route::put('/posts/{post}', [PostController::class, 'update'])->middleware('auth');

// Delete post
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->middleware('auth');

// Single post
Route::get('/posts/{post}', [PostController::class, 'show']);

// Show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Store user
Route::post('/users', [UserController::class, 'store'])->middleware('guest');

// Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login');

// Login
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');
