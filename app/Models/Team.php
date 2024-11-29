<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'state',
        'city',
        'shield'
    ];

    public function sports():BelongsTo
    {
        return $this->belongsTo(Sport::class);
    }

    public function gamesLocal():HasMany
    {
        return $this->hasMany(Game::class, 'local_team_id');
    }

    public function gamesAway():HasMany
    {
        return $this->hasMany(Game::class, 'away_team_id');
    }

    public function players():BelongsToMany
    {
        return $this->belongsToMany(Player::class);
    }

}
