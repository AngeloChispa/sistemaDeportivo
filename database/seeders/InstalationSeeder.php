<?php

namespace Database\Seeders;

use App\Models\Instalation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstalationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Instalation::factory()->count(30)->create();
    }
}
