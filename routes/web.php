<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.acceuil');
})->name('acceuil');

Route::get('/projet', function () {
    return view('pages.projet');
})->name('projets');


Route::get('/a_propos', function () {
    return view('pages.a_propos');
})->name('a_propos');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
