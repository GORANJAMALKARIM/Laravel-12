<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $name = 'John Doe';
    $x =5;
    $y = 10;
    $sum = $x + $y;
    $product = $x * $y;
    $message = "The sum of $x and $y is $sum, and the product is $product.";
    return view('home', compact('name','message'));
});

