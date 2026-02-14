<?php
namespace App\Http\Controllers;

use App\Models\DomaineCompetence;
use App\Models\Projet;
use App\Models\Utilisateur;

class AcceuilController extends Controller
{
    public function acceuil()
    {

        $utilisateur = Utilisateur::first();
        $domaines    = DomaineCompetence::with('technologies')->get();
        $projets     = Projet::with('technologies')->get();

        return view('pages.acceuil', compact('utilisateur', 'domaines', 'projets'));
    }
}
