<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\NamaController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::get('/admin', [AdminController::Class, 'admin'])->name('admin');

// Route::get('', [App\Http\Controllers\NamaController::class, ''])->name('');
// Route::get('', [NamaController:class, ''])->name('');