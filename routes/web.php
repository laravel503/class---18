<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['name'=>'Solayman Shah']);
});

Route::get('/about', function () {
    return view('about', ['name'=>'Solayman Shah']);
});