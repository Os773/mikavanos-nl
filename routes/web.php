<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function() {
    return view('about');
})->name('about');

Route::resource('blogs', Blogcontroller::class);
