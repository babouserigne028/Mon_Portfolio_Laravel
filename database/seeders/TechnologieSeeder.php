<?php
namespace Database\Seeders;

use App\Models\Technologie;
use Illuminate\Database\Seeder;

class TechnologieSeeder extends Seeder
{
    public function run(): void
    {
        Technologie::create([
            'id'          => 'f354eaf6-2304-4c0d-8858-343794c693f5',
            'nom'         => 'Laravel',
            'description' => 'Framework PHP moderne pour le développement web.',
        ]);
        Technologie::create([
            'id'          => 'ee89ff80-0f0a-40de-ab35-9c8813eb3764',
            'nom'         => 'Tailwind CSS',
            'description' => 'Framework CSS utilitaire pour des interfaces modernes.',
        ]);
        Technologie::create([
            'id'          => '29f9c7af-47e5-4a0b-8215-2fbbe928db02',
            'nom'         => 'MySQL',
            'description' => 'Base de données relationnelle.',
        ]);
    }
}
