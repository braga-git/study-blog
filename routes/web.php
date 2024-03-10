<?php

use App\Http\Controllers\AdminController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;


Route::domain('admin.' . env('APP_URL'))->group(function () {
    Route::middleware('auth')->group(function () {
        // All posts
        Route::get('/', [PostController::class, 'index']);

        // Admin panel
        Route::get('/admin', [AdminController::class, 'index']);
        // Manage posts
        Route::get('/admin/posts', [PostController::class, 'manage']);
        // Manage users
        Route::get('/admin/users', [UserController::class, 'manage']);

        // Show create post form
        Route::get('/posts/create', [PostController::class, 'create']);
        // Store post
        Route::post('/posts', [PostController::class, 'store']);
        // Show edit post form
        Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
        // Update post
        Route::put('/posts/{post}', [PostController::class, 'update']);
        // Delete post
        Route::delete('/posts/{post}', [PostController::class, 'destroy']);

        // Single post
        Route::get('/posts/{post}', [PostController::class, 'show']);

        // Show register user form
        Route::get('/register', [UserController::class, 'create']);
        // Store user
        Route::post('/users', [UserController::class, 'store']);
        // Show edit user form
        Route::get('/users/{user}/edit', [UserController::class, 'edit']);
        // Update user
        Route::put('/users/{user}', [UserController::class, 'update']);
        // Delete user
        Route::delete('/users/{user}', [UserController::class, 'destroy']);

        // Logout
        Route::post('/logout', [UserController::class, 'logout']);
    });

    // Show login form
    Route::get('/login', [UserController::class, 'login'])->name('login');
    // Login
    Route::post('/users/authenticate', [UserController::class, 'authenticate']);
});

// All posts
Route::get('/', [PostController::class, 'index']);
// Single post
Route::get('/posts/{post}', [PostController::class, 'show']);
