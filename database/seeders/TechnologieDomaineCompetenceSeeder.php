<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TechnologieDomaineCompetenceSeeder extends Seeder
{
    public function run(): void
    {
        // Associer chaque technologie à un domaine de compétence spécifique
        $associations = [
            'ee89ff80-0f0a-40de-ab35-9c8813eb3764' => 'fafdf87c-f0c0-4678-977d-222b832c10fa', // Tailwind CSS -> Développement Frontend
            'f354eaf6-2304-4c0d-8858-343794c693f5' => 'af12916e-ceca-4413-86ff-1df82ba9dde8', // Laravel -> Architecture Backend
            '29f9c7af-47e5-4a0b-8215-2fbbe928db02' => 'af12916e-ceca-4413-86ff-1df82ba9dde8', // MySQL -> Architecture Backend
        ];
        foreach ($associations as $techno_id => $domaine_id) {
            DB::table('technologie_domaine_competence')->insert([
                'id'                    => Str::uuid(),
                'technologie_id'        => $techno_id,
                'domaine_competence_id' => $domaine_id,
                'created_at'            => now(),
                'updated_at'            => now(),
            ]);
        }
    }
}
