<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/home',[PublicController::class ,'index'])->name('home');

// Route::get('/about',[PublicController::class ,'index'])->name('about');
