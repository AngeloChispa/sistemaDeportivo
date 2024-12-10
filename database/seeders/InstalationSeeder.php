<?php

namespace Database\Seeders;

use App\Models\Instalation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstalationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Instalation::create([
            'name' => 'Estadio Juan Diego Lumbreras Vega',
            'state' => 'Tamulipas',
            'city' => 'Padilla',
            'capacity' => 200,
            'nationality_id' => 1
        ]);

        Instalation::create([
            'name' => 'Estadio Azteca',
            'state' => 'Ciudad de México',
            'city' => 'Tlalpan',
            'capacity' => 87000,
            'nationality_id' => 1
        ]);

        Instalation::create([
            'name' => 'Arena Monterrey',
            'state' => 'Nuevo León',
            'city' => 'Monterrey',
            'capacity' => 17000,
            'nationality_id' => 1
        ]);

        Instalation::create([
            'name' => 'Madison Square Garden',
            'state' => 'Nueva York',
            'city' => 'Nueva York',
            'capacity' => 20000,
            'nationality_id' => 2
        ]);

        Instalation::create([
            'name' => 'Estadio Centenario',
            'state' => 'Montevideo',
            'city' => 'Montevideo',
            'capacity' => 60000,
            'nationality_id' => 3
        ]);

        Instalation::create([
            'name' => 'Maracaná',
            'state' => 'Río de Janeiro',
            'city' => 'Río de Janeiro',
            'capacity' => 78838,
            'nationality_id' => 4
        ]);

        Instalation::create([
            'name' => 'Camp Nou',
            'state' => 'Cataluña',
            'city' => 'Barcelona',
            'capacity' => 99354,
            'nationality_id' => 5
        ]);

        Instalation::create([
            'name' => 'Estadio Olímpico Universitario',
            'state' => 'Ciudad de México',
            'city' => 'Coyoacán',
            'capacity' => 72000,
            'nationality_id' => 1
        ]);

    }
}
