<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/about-us', function () {
    return view('about');
});
Route::get('/menu', function () {
    return view('products');
});
Route::get('/contact-us', function(){
    return view('contact');
});
