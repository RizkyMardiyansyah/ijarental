<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});


Route::get('/brand', function () {
    return view('brand');
})->name('brand');




