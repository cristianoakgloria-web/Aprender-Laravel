<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HabitController;

Route::get('/', [SiteController::class, 'index'])->name('site.index');

// Rota de Login
Route::get('/login', [LoginController::class, 'index'])->name('login.login');// Rota de Logout
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.login');// Rota de login

//Auth
Route::middleware('auth')->group(function () {
    //Dashboard
    Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('site.dashboard');// Rota do dashboard
    
    //Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');// Rota de logout
});


Route::get('/cadastro', [RegisterController::class, 'index'])->name('site.register');// Rota de cadastro
Route::post('/cadastro', [RegisterController::class, 'store'])->name('auth.register');// Rota de cadastro

//Hábitos
Route::get('/dashboard/habitos/criar', [HabitController::class, 'create'])->name('habit.create');// Rota de hábitos
Route::post('/dashboard/habitos/criar', [HabitController::class, 'store'])->name('habit.store');// Rota de criação de hábitos