<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UtilisateurSeeder::class,
            DomaineCompetenceSeeder::class,
            TechnologieSeeder::class,
            ProjetSeeder::class,
            ProjetTechnologieSeeder::class,
            TechnologieDomaineCompetenceSeeder::class,
        ]);

    }
}
