<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjetTechnologieSeeder extends Seeder
{
    public function run(): void
    {
        $technos = [
            'ee89ff80-0f0a-40de-ab35-9c8813eb3764', // Tailwind CSS
            'f354eaf6-2304-4c0d-8858-343794c693f5', // Laravel
            '29f9c7af-47e5-4a0b-8215-2fbbe928db02', // MySQL
        ];
        $projets = [
            '2b325de3-fa40-43f8-9de0-8496a7baf163', // Application mobile santé
            '962569fa-3676-42b8-bee1-a5b3a1207b2d', // Dashboard analytique
            '562668f5-69ca-4010-8666-3e251efde95e', // Site e-commerce
            '2d3ef505-e84d-4b42-834a-36b360a793e5', // Blog personnel
        ];
        foreach ($projets as $projet_id) {
            foreach ($technos as $techno_id) {
                DB::table('projet_technologie')->insert([
                    'id'             => Str::uuid(),
                    'projet_id'      => $projet_id,
                    'technologie_id' => $techno_id,
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ]);
            }
        }
    }
}
