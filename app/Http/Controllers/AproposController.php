<?php
namespace App\Http\Controllers;

use App\Models\Technologie;
use App\Models\User;

use App\Models\Utilisateur;

class AproposController extends Controller
{
    public function apropos()
    {
        $utilisateur = User::first(); 
        $technologies = Technologie::with('domaines')->get();
        return view('pages.a_propos', compact('technologies', 'utilisateur'));
    }

}
