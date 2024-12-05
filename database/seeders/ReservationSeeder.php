<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public $timestamps = false;
    
    public function run(): void
    {
        Reservation::create(
            [
                'instalation_id' => 1,
                'game_id' => 1,
                'reserve_date' => '2024-12-08',
                'start_hour' => '14:30:00',
                'end_hour' => '16:00:00'
            ]
        );

        Reservation::create(
            [
                'instalation_id' => 1,
                'game_id' => 2,
                'reserve_date' => '2024-12-08',
                'start_hour' => '16:30:00',
                'end_hour' => '18:00:00'
            ]
        );
    }
}
