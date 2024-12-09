<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GameEvent extends Model
{

    public $table = 'game_events';

    use HasFactory;

    protected $fillable = [
        'event',
        'minute'
    ];

    public function PlayerTeam():BelongsTo
    {
        return $this->belongsTo(PlayerTeam::class, 'player_team_id');
    }

    public function game():BelongsTo
    {
        return $this->belongsTo(Game::class, 'game_id');
    }
}
