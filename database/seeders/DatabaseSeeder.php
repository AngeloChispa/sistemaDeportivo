<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Nationality;
use App\Models\Team;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            NationalitySeeder::class,
            RolSeeder::class,
            PeopleSeeder::class,
            PlayerSeeder::class,
            SportSeeder::class,
            TeamSeeder::class
        ]);
    }
}