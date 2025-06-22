<?php

use Illuminate\Support\Facades\Route;

Route::get('/contact/home/page/{id}', function ($id) {
    echo $id;
});
// post wurde limitet und kann nicht mehr als 1048 characters lang sein
//get ist nicht limitet

