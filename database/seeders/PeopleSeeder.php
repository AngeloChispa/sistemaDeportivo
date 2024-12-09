<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
            Jugadores: 1 - 50

            Entrenadores: 51 - 100

            Referees: 101 - 150

            Usuarios: 151 - 200
        */ 
        People::factory()->count(200)->create();
        
        People::create(
            [
                'name' => 'memo',
                'lastname' => 'Ibarra',
                'birthdate' => fake()->date(),
                'birthplace' => 'Mexico',
            ]
        );
    }
}
