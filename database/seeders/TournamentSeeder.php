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
                   'type'  => 'Eliminación',
                   'start_date' => now(),
                   'end_date' => now(),
                   'description' => 'Aqui jugo Erick Mata el 10 de la poli'
            ]
        );
    }
}
