<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

#index
Route::get('/', function () {
    return view('index');
});

#About
Route::get('/about', function () {
    return view('about');
});

#blog
Route::get('/blog', function () {
    return view('blog');
});

#contact
Route::get('/contact', function () {
    return view('contact');
});

#gallery
Route::get('/gallery', function () {
    return view('gallery');
});

#hotel
Route::get('/hotel', function () {
    return view('hotel');
});
