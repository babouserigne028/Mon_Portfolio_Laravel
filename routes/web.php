<?php

use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminProjetController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('pages.acceuil');
})->name('acceuil');*/

Route::get('/', [AcceuilController::class, 'acceuil'])->name('acceuil');

Route::get('/projet', [ProjetController::class, 'projet'])->name('projets');

Route::get('/a_propos', [AproposController::class, 'apropos'])->name('a_propos');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    
    Route::get('/', function () {
        return view('admin.dashboard'); 
    })->name('dashboard');

    Route::resource('projets', AdminProjetController::class);
    Route::resource('technologies', App\Http\Controllers\Admin\AdminTechnologieController::class);
    Route::get('/profil', [App\Http\Controllers\Admin\AdminProfilController::class, 'edit'])->name('profil.edit');
    Route::put('/profil', [App\Http\Controllers\Admin\AdminProfilController::class, 'update'])->name('profil.update');

});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
});
