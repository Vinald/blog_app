<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

// Welcome page routes
Route::get('/', [WelcomeController::class, 'welcome']);
Route::get('/welcome', [WelcomeController::class, 'welcome']);
Route::get('/register', [WelcomeController::class, 'showRegisterForm'])->name('register');
Route::get('/login', [WelcomeController::class, 'showLoginForm'])->name('login');

// User routes
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Home page route
Route::get('/home', [HomeController::class, 'home'])->name('home');

// Post routes
Route::post('/create-post', [PostController::class, 'createPost'])->name('post');
Route::get('/home', function () {
    $posts = Post::all();
    return view('home', ['posts'=> $posts]);
});
