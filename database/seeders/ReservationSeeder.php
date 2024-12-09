<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public $timestamps = false;

    public function run(): void
    {
        $games = DB::table('games')->get();
        $instalations = range(1, 7); // IDs de instalaciones disponibles

        foreach ($games as $game) {
            $instalation_id = $instalations[array_rand($instalations)];
            $reserve_date = now()->addDays(rand(1, 30))->format('Y-m-d');
            $start_hour = sprintf('%02d:%02d:00', rand(8, 18), rand(0, 1) * 30); // Horas entre 8:00 y 18:30
            $end_hour = date('H:i:s', strtotime($start_hour) + 5400); // 1.5 horas después

            Reservation::create([
                'instalation_id' => $instalation_id,
                'game_id' => $game->id,
                'reserve_date' => $reserve_date,
                'start_hour' => $start_hour,
                'end_hour' => $end_hour,
            ]);
        }
    }
}
