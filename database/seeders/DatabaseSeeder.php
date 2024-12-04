<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            NationalitySeeder::class,
            InstalationSeeder::class,
            RolSeeder::class,
            PeopleSeeder::class,
            PlayerSeeder::class,
            TrainerSeeder::class,
            RefereeSeeder::class,
            UserSeeder::class,
            SportSeeder::class,
            TeamSeeder::class,
            TournamentSeeder::class,
            GameSeeder::class,
            //ReservationSeeder::class
        ]);
    }
}