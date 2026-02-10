<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DomaineCompetence;
use App\Models\Projet;
use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    public function acceuil()
{
    // On récupère ton profil admin
    $utilisateur = \App\Models\User::first(); 

    if (!$utilisateur) {
        return "Base de données vide ! Lancez le seeder.";
    }

    // On prépare les variables attendues par le composant hero--section
    $prenom = $utilisateur->first_name;
    $nom = $utilisateur->last_name;
    $apropos = $utilisateur->apropos;
    $nbre_annee_experience = $utilisateur->nbre_annee_experience;
    $photo = $utilisateur->photo;
    $lien_cv = $utilisateur->lien_cv;

    $domaines = \App\Models\DomaineCompetence::with('technologies')->get();
    $projets = \App\Models\Projet::with('technologies')->get();

    return view('pages.acceuil', compact(
        'utilisateur', 'prenom', 'nom', 'apropos', 
        'nbre_annee_experience', 'photo', 'lien_cv', 
        'domaines', 'projets'
    ));
}
}