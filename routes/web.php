<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\PublicRecourceController;
use App\Http\Controllers\OrmController;
use Dom\Comment;

Route::resource('/products', ProductController::class);