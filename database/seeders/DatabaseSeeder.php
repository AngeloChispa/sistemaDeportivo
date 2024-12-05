<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Nationality;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
       $this->call([
            RolSeeder::class,
            PeopleSeeder::class,
            PlayerSeeder::class,
            NationalitySeeder::class,
            SponsorSeeder::class,
            TournamentSeeder::class,
            InstalationSeeder::class,
            //SportSeeder::class
       ]);
    }
}