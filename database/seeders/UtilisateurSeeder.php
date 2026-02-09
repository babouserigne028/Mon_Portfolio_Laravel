<?php
namespace Database\Seeders;

use App\Models\Utilisateur;
use Illuminate\Database\Seeder;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Utilisateur::create([
            'id'                    => 'c1a2b3c4-d5e6-7890-abcd-123456789abc', // UUID fixe
            'nom'                   => 'Babou',
            'prenom'                => 'Serigne Abdoulaye',
            'email'                 => 'babouserigne028@example.com',
            'mot_de_passe'          => bcrypt('password'),
            'photo'                 => 'Gemini_Generated_Image_o0n92ho0n92ho0n9.png',
            'apropos'               => "Je construis des applications web évolutives avec un souci d'expérience utilisateur et de code propre.\n"
            . "Je suis spécialisé dans la transformation de problèmes complexes en solutions digitales élégantes.\n"
            . "Mon objectif est de créer des interfaces intuitives et performantes, tout en assurant une architecture solide et scalable.\n",
            'lien_cv'               => "CvTest.pdf",
            'nbre_annee_experience' => 5,
            'description'           => "Développeur professionnel avec plus de 5 ans d’expérience dans la création de solutions web performantes.\n"
            . "Mon parcours a commencé par une curiosité pour le fonctionnement d’Internet, qui s’est transformée en une carrière axée sur le code propre, le design centré utilisateur et une architecture robuste.\n"
            . "Je crois en l’apprentissage continu et je reste à jour sur les dernières tendances du secteur pour offrir les meilleurs résultats.\n"
            . "Mon approche allie excellence technique et compréhension des objectifs business, afin que chaque ligne de code apporte de la valeur.\n"
            . "Quand je ne code pas, je contribue à des projets open-source, je mentor des développeurs juniors ou j’explore de nouveaux modèles de design UI.\n",
            'adresse'               => 'Dakar, Sénégal',
            'created_at'            => now(),
            'updated_at'            => now(),
        ]);

    }
}
