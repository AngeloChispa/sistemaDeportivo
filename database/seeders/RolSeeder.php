<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('roles')->insert([
            ['name' => 'Jugador', 'description' => 'Un jugador de cualquier equipo'],
            ['name' => 'Entrenador', 'description' => 'El entrenador de un equipo'],
            ['name' => 'Arbitro', 'description' => 'Persona encargada de arbitrar los partidos'],
            ['name' => 'Aficionado', 'description' => 'Un espectador o aficionado al deporte'],
        ]);
    }
}
