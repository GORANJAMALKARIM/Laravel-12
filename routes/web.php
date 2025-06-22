<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $name = 'John Doe';
    return view('home', compact('name'));
});

