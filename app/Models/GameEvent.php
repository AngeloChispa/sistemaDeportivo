<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GameEvent extends Model
{
    public $table = 'game_events';

    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        'player_team_id',
        'game_id',
        'event',
        'minute'
    ];

    public function playerTeam():BelongsTo
    {
        return $this->belongsTo(PlayerTeam::class, 'player_team_id');
    }

    public function game():BelongsTo
    {
        return $this->belongsTo(Game::class, 'game_id');
    }
}
