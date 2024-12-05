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
            'country' => 'México',
            'state' => 'Tamulipas',
            'city' => 'Padilla',
            'capacity' => 200
        ]);

    }
}
