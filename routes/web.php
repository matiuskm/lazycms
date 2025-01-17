<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Site\HomeController::class, 'index'])->name('site.home');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('auth.login');
