<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home', ['nombre' => 'Jorge'])->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');

Route::view('/portfolio', 'portfolio')->name('portfolio');

// Route::get('/', function(){

//     $nombre = "Jorge";

//     return view('home')->with('nombre' => $nombre)
// })->name('home');


