<?php

use Illuminate\Support\Facades\Route;
use App\Models\MenuItem;


Route::get('/', function () {
    return view('home');
});
Route::get('/about-us', function () {
    return view('about');
});
Route::get('/menu', function () {
    $items = MenuItem::all();
    return view('products', ['items' => $items]);
});
Route::get('/contact-us', function(){
    return view('contact');
});
