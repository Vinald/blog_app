<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/register', [WelcomeController::class, 'showRegisterForm'])->name('register');
Route::get('/login', [WelcomeController::class, 'showLoginForm'])->name('login');

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/home', [HomeController::class, 'home'])->name('home');
