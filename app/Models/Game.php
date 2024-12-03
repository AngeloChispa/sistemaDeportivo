<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        
    ];

    public function localTeam():BelongsTo
    {
        return $this->belongsTo(Team::class, 'local_team_id');
    }

    public function awayTeam():BelongsTo
    {
        return $this->belongsTo(Team::class, 'away_team_id');
    }

    public function referee():BelongsTo
    {
        return $this->belongsTo(Referee::class);
    }

    public function tournament():BelongsTo
    {
        return $this->belongsTo(Tournament::class);
    }

    public function player():BelongsToMany
    {
        return $this->belongsToMany(Player::class, 'game_events')->withPivot('event', 'minute');
    }
    
    public function instalation():BelongsToMany
    {
        return $this->belongsToMany(Instalation::class)->withPivot('id', 'instalation_id', 'game_id', 'reserve_date', 'start_hour', 'end_hour');
    }
}
