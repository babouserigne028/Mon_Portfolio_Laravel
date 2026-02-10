<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projet;
use App\Models\Technologie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProjetController extends Controller
{
    // Liste des projets pour l'admin
    public function index()
    {
        $projets = Projet::all();
        return view('admin.projets.index', compact('projets'));
    }

    // 2. Formulaire de création (Consigne 2.1)
    public function create()
    {
        $technologies = Technologie::all(); // Pour pouvoir lier des technos
        return view('admin.projets.create', compact('technologies'));
    }

    // 3. Enregistrement en base de données
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|max:200',
            'description' => 'required',
            'image_couverture' => 'required|image|mimes:jpg,png,jpeg|max:2048', // Validation image
        ]);

        $projet = new Projet();
        $projet->nom = $request->nom;
        $projet->description = $request->description;

        // Gestion de l'image (Consigne 4 - Stockage côté serveur)
        if ($request->hasFile('image_couverture')) {
            $path = $request->file('image_couverture')->store('projects', 'public');
            $projet->image_couverture = $path;
        }

        $projet->save();

        // Liaison avec les technologies (Relation Many-to-Many)
        if ($request->has('technologies')) {
            $projet->technologies()->sync($request->technologies);
        }

        return redirect()->route('admin.projets.index')->with('success', 'Projet ajouté !');
    }

    // 4. Formulaire de modification (Consigne 2.3)
    public function edit($id)
    {
        $projet = Projet::findOrFail($id);
        $technologies = Technologie::all();
        return view('admin.projets.edit', compact('projet', 'technologies'));
    }

    // 5. Mise à jour des données
    public function update(Request $request, $id)
    {
        $projet = Projet::findOrFail($id);

        $request->validate([
            'nom' => 'required|max:200',
            'description' => 'required',
            'image_couverture' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $projet->nom = $request->nom;
        $projet->description = $request->description;

        if ($request->hasFile('image_couverture')) {
            // Supprimer l'ancienne image physiquement
            if ($projet->image_couverture) {
                Storage::disk('public')->delete($projet->image_couverture);
            }
            $path = $request->file('image_couverture')->store('projects', 'public');
            $projet->image_couverture = $path;
        }

        $projet->save();
        $projet->technologies()->sync($request->technologies);

        return redirect()->route('admin.projets.index')->with('success', 'Projet modifié !');
    }

    // 6. Suppression (Consigne 2.4)
    public function destroy($id)
    {
        $projet = Projet::findOrFail($id);
        
        // Supprimer l'image du disque avant de supprimer de la base
        if ($projet->image_couverture) {
            Storage::disk('public')->delete($projet->image_couverture);
        }
        
        $projet->delete();

        return redirect()->route('admin.projets.index')->with('success', 'Projet supprimé !');
    }
}