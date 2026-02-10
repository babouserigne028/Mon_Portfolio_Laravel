<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\DomaineCompetence;
use App\Models\Projet;
use App\Models\Technologie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. CRÉATION DE L'ADMIN (Tes infos de la photo)
        $adminUser = User::create([
            'id' => (string) Str::uuid(),
            'name' => 'Serigne Abdoulaye Babou',
            'first_name' => 'Serigne Abdoulaye', 
            'last_name' => 'Babou',              
            'email' => 'admin@test.com',
            'password' => Hash::make('admin'), 
            'apropos' => 'Je construis des applications web évolutives avec un souci d\'expérience utilisateur et de code propre. Je suis spécialisé dans la transformation de problèmes complexes en solutions digitales élégantes.',
            'nbre_annee_experience' => 5,
            // On utilise le nom exact du fichier dans ta capture
            'photo' => 'Gemini_Generated_Image_o0n92ho0n92ho0n9.png', 
            'lien_cv' => 'CvTest.pdf',     
            'adresse' => 'Dakar, Sénégal', 
        ]);

        // 2. DOMAINES DE COMPÉTENCES
        $domaineDev = DomaineCompetence::create([
            'id' => (string) Str::uuid(), 'nom' => 'Développement Web', 'icone' => 'code', 'couleur' => '#3B82F6'
        ]);
        $domaineDesign = DomaineCompetence::create([
            'id' => (string) Str::uuid(), 'nom' => 'Design UI/UX', 'icone' => 'design_services', 'couleur' => '#EC4899'
        ]);

        // 3. TECHNOLOGIES
        $techLaravel = Technologie::create(['id' => (string) Str::uuid(), 'nom' => 'Laravel']);
        $techTailwind = Technologie::create(['id' => (string) Str::uuid(), 'nom' => 'Tailwind CSS']);
        $techPHP = Technologie::create(['id' => (string) Str::uuid(), 'nom' => 'PHP 8.4']);

        $techLaravel->domaines()->attach($domaineDev->id);
        $techTailwind->domaines()->attach($domaineDesign->id);

        // 4. CRÉATION DES PROJETS (Utilisant tes images : ecommerce.jpg, sante_app.jpg, etc.)
        
        // Projet 1 : E-commerce
        $p1 = Projet::create([
            'id' => (string) Str::uuid(),
            'nom' => 'Plateforme E-commerce',
            'description' => 'Une boutique en ligne complète avec système de paiement.',
            'image_couverture' => 'ecommerce.jpg', // Présent dans ta capture
        ]);
        $p1->technologies()->attach([$techLaravel->id, $techTailwind->id]);

        // Projet 2 : Santé App
        $p2 = Projet::create([
            'id' => (string) Str::uuid(),
            'nom' => 'Sante Connect',
            'description' => 'Application de gestion de rendez-vous médicaux.',
            'image_couverture' => 'sante_app.jpg', // Présent dans ta capture
        ]);
        $p2->technologies()->attach([$techLaravel->id]);

        // Projet 3 : Dashboard Admin
        $p3 = Projet::create([
            'id' => (string) Str::uuid(),
            'nom' => 'Dashboard Analytics',
            'description' => 'Visualisation de données complexes en temps réel.',
            'image_couverture' => 'dashboard.jpg', // Présent dans ta capture
        ]);
        $p3->technologies()->attach([$techTailwind->id]);

        // Projet 4 : Blog Personnel
        $p4 = Projet::create([
            'id' => (string) Str::uuid(),
            'nom' => 'Mon Blog Pro',
            'description' => 'Partage d\'articles techniques sur le développement.',
            'image_couverture' => 'blog.jpg', // Présent dans ta capture
        ]);
    }
}