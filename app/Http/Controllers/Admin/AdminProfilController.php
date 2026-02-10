<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use App\Models\User; 

class AdminProfilController extends Controller
{
    public function edit()
    {
        $user = Auth::user(); 
        
        return view('admin.profil.edit', compact('user'));
    }

    public function update(Request $request)
    {
        // 1. On récupère l'utilisateur à modifier (celui qui est connecté)
        // La variable s'appelle bien $user
        $user = Auth::user();

        // 2. Validation des données du formulaire
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'apropos' => 'nullable|string',
            'nbre_annee_experience' => 'nullable|integer',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'lien_cv' => 'nullable|mimes:pdf|max:5000',
            'password' => 'nullable|string|min:8', // Mot de passe optionnel
        ]);

        // 3. Mise à jour des champs
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->input('email');
        
        if (Schema::hasColumn('users', 'apropos')) {
            $user->apropos = $request->input('apropos');
        }
        if (Schema::hasColumn('users', 'nbre_annee_experience')) {
            $user->nbre_annee_experience = $request->input('nbre_annee_experience');
        }

        if ($request->hasFile('photo')) {
            if ($user->photo) Storage::disk('public')->delete($user->photo);
            $user->photo = $request->file('photo')->store('profil', 'public');
        }

        // Gestion du CV
        if ($request->hasFile('lien_cv')) {
            if ($user->lien_cv) Storage::disk('public')->delete($user->lien_cv);
            $user->lien_cv = $request->file('lien_cv')->store('cv', 'public');
        }
        
        // Gestion du nouveau mot de passe
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // 4. SAUVEGARDE
        if ($user instanceof \App\Models\User) {
            $user->save();
        }

        // 5. Redirection avec un message de succès
        return redirect()->route('admin.profil.edit')->with('success', 'Profil mis à jour avec succès !');
    }
}