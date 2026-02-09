<?php

use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjetController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('pages.acceuil');
})->name('acceuil');*/

Route::get('/', [AcceuilController::class, 'acceuil'])->name('acceuil');

Route::get('/projet', [ProjetController::class, 'projet'])->name('projets');

Route::get('/a_propos', [AproposController::class, 'apropos'])->name('a_propos');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
