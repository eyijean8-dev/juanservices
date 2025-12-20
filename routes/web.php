<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

Route::get('/sitemap.xml', function () {
    $urls = [
        URL::to('/'),
        URL::to('/services'),
        URL::to('/projets'),
        URL::to('/a_propos'),
        URL::to('/contact'),
    ];

    return response()->view('sitemap', compact('urls'))->header('Content-Type', 'text/xml');
});



Route::get('/', function () {
    return view('index');
});



Route::view('/services', 'services')->name('services');
Route::view('/projets', 'projets')->name('projets');
Route::view('/a_propos', 'a_propos')->name('a_propos');
Route::view('/contact', 'contact')->name('contact');
