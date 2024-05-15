<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\NamaController;

Route::get('/', function () {
    return view('admin');
});

// Route::get('', [App\Http\Controllers\NamaController::class, ''])->name('');
// Route::get('', [NamaController:class, ''])->name('');