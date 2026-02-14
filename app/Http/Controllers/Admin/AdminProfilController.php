<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class AdminProfilController extends Controller
{
    public function edit()
    {
        $utilisateur = Utilisateur::find(Auth::id());
        return view('admin.profil.edit', compact('utilisateur'));
    }

    public function update(Request $request)
    {
        // 1. On récupère l'utilisateur à modifier (celui qui est connecté)
        $utilisateur = Utilisateur::find(Auth::id());

        // 2. Validation des données du formulaire
        $request->validate([
            'first_name'            => 'required|string|max:100',
            'last_name'             => 'required|string|max:100',
            'email'                 => 'required|email|unique:utilisateurs,email,' . $utilisateur->id,
            'apropos'               => 'nullable|string',
            'nbre_annee_experience' => 'nullable|integer',
            'photo'                 => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'lien_cv'               => 'nullable|mimes:pdf|max:5000',
            'password'              => 'nullable|string|min:8',
        ]);

        // 3. Mise à jour des champs
        $utilisateur->first_name = $request->first_name;
        $utilisateur->last_name  = $request->last_name;
        $utilisateur->email      = $request->input('email');

        if (Schema::hasColumn('utilisateurs', 'apropos')) {
            $utilisateur->apropos = $request->input('apropos');
        }
        if (Schema::hasColumn('utilisateurs', 'nbre_annee_experience')) {
            $utilisateur->nbre_annee_experience = $request->input('nbre_annee_experience');
        }

        if ($request->hasFile('photo')) {
            if ($utilisateur->photo) {
                Storage::disk('public')->delete($utilisateur->photo);
            }

            $utilisateur->photo = $request->file('photo')->store('profil', 'public');
        }

        // Gestion du CV
        if ($request->hasFile('lien_cv')) {
            if ($utilisateur->lien_cv) {
                Storage::disk('public')->delete($utilisateur->lien_cv);
            }

            $utilisateur->lien_cv = $request->file('lien_cv')->store('cv', 'public');
        }

        // Gestion du nouveau mot de passe
        if ($request->filled('password')) {
            $utilisateur->password = Hash::make($request->password);
        }

        // 4. SAUVEGARDE
        if ($utilisateur instanceof Utilisateur) {
            $utilisateur->save();
        }

        // 5. Redirection avec un message de succès
        return redirect()->route('admin.profil.edit')->with('success', 'Profil mis à jour avec succès !');
    }
}
