<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tournaments = [1, 2, 3, 4, 5, 6, 7];
        $teams = range(1, 20);
        $referees = range(1, 50);

        foreach ($tournaments as $tournament) {
            for ($i = 0; $i < 10; $i++) {
                $localTeam = $teams[array_rand($teams)];
                do {
                    $awayTeam = $teams[array_rand($teams)];
                } while ($awayTeam === $localTeam);

                $referee = $referees[array_rand($referees)];

                DB::table('games')->insert([
                    'tournament_id' => $tournament,
                    'local_team_id' => $localTeam,
                    'away_team_id' => $awayTeam,
                    'referee_id' => $referee,
                ]);
            }
        }
    }
}
