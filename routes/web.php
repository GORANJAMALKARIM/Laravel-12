<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\PublicRecourceController;
use Dom\Comment;

Route::get('/home',[PublicController::class ,'index'])->name('home');

Route::get('/about',[PublicController::class ,'about'])->name('about');
Route::get('product/index',[ProductController::class ,'index']);
Route::get('product/stor',[ProductController::class ,'insert']);

Route::resource('public', PublicRecourceController::class)->names([
    'index' => 'public.index',
    'create' => 'public.create',
    'store' => 'public.store',
    'show' => 'public.show',
    'edit' => 'public.edit',
    'update' => 'public.update',
    'destroy' => 'public.destroy',
]); 
Route::resource('public', PublicRecourceController::class)->only([
    'index' => 'public.index',
    'create' => 'public.create',
    'store' => 'public.store',

]); 
Route::resource('public', PublicRecourceController::class)->except([
    'index' => 'public.index',
    'create' => 'public.create',
    'store' => 'public.store',

]); 