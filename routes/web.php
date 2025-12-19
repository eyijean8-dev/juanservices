<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});



Route::view('/services', 'services')->name('services');
Route::view('/projets', 'projets')->name('projets');
Route::view('/a_propos', 'a_propos')->name('a_propos');
Route::view('/contact', 'contact')->name('contact');
