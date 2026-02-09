<?php
namespace Database\Seeders;

use App\Models\DomaineCompetence;
use Illuminate\Database\Seeder;

class DomaineCompetenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id'          => 'fafdf87c-f0c0-4678-977d-222b832c10fa',
                'nom'         => 'Développement Frontend',
                'description' => "Création d'interfaces réactives et interactives avec React, Next.js et des frameworks CSS modernes comme Tailwind.",
                'icone'       => 'code',
                'couleur'     => '#3B82F6',
            ],
            [
                'id'          => 'af12916e-ceca-4413-86ff-1df82ba9dde8',
                'nom'         => 'Architecture Backend',
                'description' => "Conception d’API robustes et de logiques serveur évolutives avec Node.js, Python et des bases de données SQL/NoSQL.",
                'icone'       => 'database',
                'couleur'     => '#8B5CF6',
            ],
            [
                'id'          => 'c7e1b2a3-4d5f-6e7a-8b9c-0d1e2f3a4b5c',
                'nom'         => 'Design UI/UX',
                'description' => "Création de parcours utilisateurs intuitifs et de designs visuels épurés qui privilégient l’utilisabilité et l’accessibilité.",
                'icone'       => 'brush',
                'couleur'     => '#10B981',
            ],
            [
                'id'          => 'e2f3a4b5-c7e1-b2a3-4d5f-6e7a8b9c0d1e',
                'nom'         => 'Outils de versionning',
                'description' => "Maîtrise de Git, GitHub et GitLab pour la gestion de versions, le travail collaboratif et le déploiement continu.",
                'icone'       => 'merge',
                'couleur'     => '#F05032',
            ],
        ];

        foreach ($data as $item) {
            DomaineCompetence::create($item);
        }

    }
}
