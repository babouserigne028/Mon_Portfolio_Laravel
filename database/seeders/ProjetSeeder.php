<?php
namespace Database\Seeders;

use App\Models\Projet;
use Illuminate\Database\Seeder;

class ProjetSeeder extends Seeder
{
    public function run(): void
    {
        Projet::create([
            'id'               => '562668f5-69ca-4010-8666-3e251efde95e',
            'nom'              => 'Site e-commerce',
            'description'      => "Création d’une boutique en ligne avec gestion des stocks et paiement sécurisé.",
            'image_couverture' => 'ecommerce.jpg',
        ]);
        Projet::create([
            'id'               => '2b325de3-fa40-43f8-9de0-8496a7baf163',
            'nom'              => 'Application mobile santé',
            'description'      => "Développement d’une app mobile pour le suivi des rendez-vous médicaux.",
            'image_couverture' => 'sante_app.jpg',
        ]);
        Projet::create([
            'id'               => '2d3ef505-e84d-4b42-834a-36b360a793e5',
            'nom'              => 'Blog personnel',
            'description'      => "Mise en place d’un blog avec gestion des articles et commentaires.",
            'image_couverture' => 'blog.jpg',
        ]);
        Projet::create([
            'id'               => '962569fa-3676-42b8-bee1-a5b3a1207b2d',
            'nom'              => 'Dashboard analytique',
            'description'      => "Développement d’un tableau de bord pour visualiser des données en temps réel.",
            'image_couverture' => 'dashboard.jpg',
        ]);
    }
}
