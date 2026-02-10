<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $utilisateur = User::first(); 

        return view('pages.contact', compact('utilisateur'));
    }
}