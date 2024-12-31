<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('page.home');
})->name('home');

Route::get('/about', function () {
    return view('page.about');
})->name('about');

Route::get('/contact', function () {
    return view('page.contact');
})->name('contact');

Route::get('/journey', function () {
    return view('page.journey');
})->name('journey');
