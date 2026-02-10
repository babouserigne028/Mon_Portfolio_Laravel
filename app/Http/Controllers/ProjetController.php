<?php
namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\User;
use App\Models\Technologie;
use App\Models\Utilisateur;

class ProjetController extends Controller
{
    public function projet()
    {
        $utilisateur = User::first();
        $techno      = request('techno');
        if ($techno) {
            $projets = Projet::whereHas('technologies', function ($query) use ($techno) {
                $query->where('nom', $techno);
            })->get();
        } else {
            $projets = Projet::all();
        }
        $technologies = Technologie::all();
        return view('pages.projet', compact('projets', 'technologies', 'utilisateur'));
    }
}
