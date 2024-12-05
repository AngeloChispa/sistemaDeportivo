<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sport;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sport::create([
            "name"=> "Futbol",
            "description" => "Deporte de equipo jugado entre dos conjuntos de once jugadores cada uno, mientras los árbitros se ocupan de que las normas se cumplan correctamente."
        ]);

        Sport::create([
            "name"=> "basebol",
            "description" => "Deporte de equipo jugado por dos equipos de nueve jugadores cada uno."
        ]);

        Sport::create([
            "name"=> "basketbol",
            "description" => "Deporte de equipo, jugado entre dos conjuntos de cinco jugadores cada uno en cuatro períodos de cuartos de diez minutos cada uno."
        ]);

    }
}
