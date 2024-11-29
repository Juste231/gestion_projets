<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TachesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


                DB::table('taches')->insert([
                    // Tâches pour Projet Alpha (ID = 1)
                    [
                        'titre' => 'Tâche 1 pour Projet Alpha',
                        'description' => 'Première tâche pour le projet Alpha.',
                        'statut' => 'en cours',
                        'date_limite' => Carbon::now()->addDays(10)->toDateString(),
                        'projet_id' => 1,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'titre' => 'Tâche 2 pour Projet Alpha',
                        'description' => 'Deuxième tâche pour le projet Alpha.',
                        'statut' => 'terminé',
                        'date_limite' => Carbon::now()->addDays(15)->toDateString(),
                        'projet_id' => 1,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    // Tâches pour Projet Beta (ID = 2)
                    [
                        'titre' => 'Tâche 1 pour Projet Beta',
                        'description' => 'Première tâche pour le projet Beta.',
                        'statut' => 'en cours',
                        'date_limite' => Carbon::now()->addDays(20)->toDateString(),
                        'projet_id' => 2,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'titre' => 'Tâche 2 pour Projet Beta',
                        'description' => 'Deuxième tâche pour le projet Beta.',
                        'statut' => 'en cours',
                        'date_limite' => Carbon::now()->addDays(25)->toDateString(),
                        'projet_id' => 2,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    // Tâches pour Projet Gamma (ID = 3)
                    [
                        'titre' => 'Tâche 1 pour Projet Gamma',
                        'description' => 'Première tâche pour le projet Gamma.',
                        'statut' => 'terminé',
                        'date_limite' => Carbon::now()->addDays(5)->toDateString(),
                        'projet_id' => 3,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'titre' => 'Tâche 2 pour Projet Gamma',
                        'description' => 'Deuxième tâche pour le projet Gamma.',
                        'statut' => 'en cours',
                        'date_limite' => Carbon::now()->addDays(15)->toDateString(),
                        'projet_id' => 3,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    // Tâches pour Projet Delta (ID = 4)
                    [
                        'titre' => 'Tâche 1 pour Projet Delta',
                        'description' => 'Première tâche pour le projet Delta.',
                        'statut' => 'en cours',
                        'date_limite' => Carbon::now()->addDays(7)->toDateString(),
                        'projet_id' => 4,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'titre' => 'Tâche 2 pour Projet Delta',
                        'description' => 'Deuxième tâche pour le projet Delta.',
                        'statut' => 'en cours',
                        'date_limite' => Carbon::now()->addDays(12)->toDateString(),
                        'projet_id' => 4,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                ]);
       
        
        
            }
}
