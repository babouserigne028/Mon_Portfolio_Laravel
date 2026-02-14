<?php
namespace App\Http\Controllers;

use App\Models\Utilisateur;

class ContactController extends Controller
{
    public function contact()
    {
        $utilisateur = Utilisateur::first();

        return view('pages.contact', compact('utilisateur'));
    }
}
