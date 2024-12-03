<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create([
            'name' => 'Real Vegas',
            'state' => 'Tamaulipas',
            'city' => 'Ciudad Victoria',
            'sport_id' => 1,
        ]);

        //Lo siguiente no esta bien hacerlo pero es para testear
        DB::table('player_team')->insert(
            [
                'team_id' => 1,  
                'player_id' => 34,
                'position' => 'Delantero',
                'dorsal' => 7,
            ]
        );

        Team::create([
            'name' => 'Deportivo La Moderna',
            'state' => 'Tamaulipas',
            'city' => 'Ciudad Victoria',
            'sport_id' => 1
        ]);

        DB::table('player_team')->insert(
            [
                'team_id' => 2,  
                'player_id' => 30,
                'position' => 'Defensa',
                'dorsal' => 7,
            ]
        );

                

    }
}
