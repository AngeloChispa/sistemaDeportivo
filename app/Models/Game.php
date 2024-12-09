<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Game extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'tournament_id',
        'local_team_id',
        'away_team_id',
        'referee_id'
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

    public function reservation():HasOne
    {
        return $this->hasOne(Reservation::class);
    }

    public function events():HasMany
    {
        return $this->hasMany(GameEvent::class, 'game_id');
    }

}
