<?php

namespace Database\Seeders;

use App\Models\Tournament;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tournament::create(
            [
                   'name' => 'Champions Victoria',
                   'type'  => '1',
                   'start_date' => now(),
                   'end_date' => now(),
                   'description' => 'Aqui jugo Erick Mata el 10 de la poli'
            ]
        );
        
        Tournament::create([
            'name' => 'Copa Libertadores',
            'type' => '1',
            'start_date' => now()->subMonths(6),
            'end_date' => now(),
            'description' => 'Torneo de clubes más prestigioso de América del Sur.'
        ]);

        Tournament::create([
            'name' => 'Liga MX Apertura',
            'type' => '1',
            'start_date' => now()->subMonths(3),
            'end_date' => now()->addMonth(),
            'description' => 'El torneo de apertura del fútbol mexicano.'
        ]);

        Tournament::create([
            'name' => 'UEFA Champions League',
            'type' => '1',
            'start_date' => now()->subMonths(8),
            'end_date' => now()->addMonth(2),
            'description' => 'La competición de clubes más importante de Europa.'
        ]);

        Tournament::create([
            'name' => 'Copa del Mundo Sub-20',
            'type' => '1',
            'start_date' => now()->subYear(),
            'end_date' => now()->subMonths(11),
            'description' => 'Torneo juvenil que reúne a las mejores selecciones del mundo.'
        ]);

        Tournament::create([
            'name' => 'Copa América',
            'type' => '1',
            'start_date' => now()->subMonths(10),
            'end_date' => now()->subMonths(8),
            'description' => 'El torneo de selecciones más antiguo del mundo.'
        ]);

        Tournament::create([
            'name' => 'Liga de Naciones de la UEFA',
            'type' => '1',
            'start_date' => now()->subMonths(7),
            'end_date' => now()->subMonths(6),
            'description' => 'Torneo bienal entre selecciones europeas.'
        ]);

        Tournament::create([
            'name' => 'Mundial de Clubes',
            'type' => '1',
            'start_date' => now()->subMonths(2),
            'end_date' => now()->subMonth(),
            'description' => 'Competencia anual entre los campeones de cada confederación.'
        ]);
    }
}
