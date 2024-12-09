<?php

namespace Database\Seeders;

use App\Models\GameEvent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GameEvent::create(
            [
                'player_team_id' => 1,
                'game_id' => 1,
                'event' => 'goal',
                'minute' => 25
            ]
        );
        
        GameEvent::create(
            [
                'player_team_id' => 1,
                'game_id' => 1,
                'event' => 'goal',
                'minute' => 65
            ]
        );

        GameEvent::create(
            [
                'player_team_id' => 1,
                'game_id' => 1,
                'event' => 'goal',
                'minute' => 75
            ]
        );
    }
}
