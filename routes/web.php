<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


Route::domain('admin.' . env('APP_URL'))->group(function () {
    Route::middleware('auth')->group(function () {

        // Home
        Route::get('/', [PagesController::class, 'home'])->name('pages.home');
        // All posts
        Route::get('/posts', [PagesController::class, 'posts'])->name('pages.posts');

        // Admin panel
        Route::get('/admin', [AdminController::class, 'index']);

        // Manage posts
        Route::get('/admin/posts', [PostController::class, 'manage']);
        // Show create post form
        Route::get('/posts/create', [PostController::class, 'create']);
        // Store post
        Route::post('/posts', [PostController::class, 'store']);
        // Show edit post form
        Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
        // Update post
        Route::put('/posts/{post}', [PostController::class, 'update']);
        // Delete post
        Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.destroy');

        Route::group(['middleware' => ['permission:view users|create users|edit users|delete users']], function () {
            // Manage users
            Route::get('/admin/users', [UserController::class, 'manage']);
            // Show create user form
            Route::get('/create', [UserController::class, 'create']);
            // Store user
            Route::post('/users', [UserController::class, 'store']);
            // Show edit user form
            Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
            // Update user
            Route::put('/users/{user}', [UserController::class, 'update']);
            // Delete user
            Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('user.destroy');
        });

        // Single post
        Route::get('/posts/{post}', [PostController::class, 'show']);

        // Logout
        Route::post('/logout', [UserController::class, 'logout']);
    });

    // Show login form
    Route::get('/login', [UserController::class, 'login'])->name('login');
    // Login
    Route::post('/users/authenticate', [UserController::class, 'authenticate']);
});

// Home
Route::get('/', [PagesController::class, 'home'])->name('pages.home');
// All posts
Route::get('/posts', [PagesController::class, 'posts'])->name('pages.posts');
// Single post
Route::get('/posts/{post}', [PostController::class, 'show']);
