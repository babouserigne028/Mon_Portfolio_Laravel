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
        $domaines    = DomaineCompetence::all();
        $projets     = Projet::limit(4)->get();
        return view('pages.acceuil', compact('utilisateur', 'domaines', 'projets'));
    }
}
