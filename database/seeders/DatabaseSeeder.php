<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Nationality;
use App\Models\Reservation;
use App\Models\Team;
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
            SportSeeder::class,
            TeamSeeder::class,
            RefereeSeeder::class,
            TournamentSeeder::class,
            GameSeeder::class,
            ReservationSeeder::class
        ]);
    }
}
