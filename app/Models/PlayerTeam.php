<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PlayerTeam extends Model
{
    use HasFactory;

    protected $table = 'player_team';

    public $timestamps = false;

    public function titles():HasMany
    {
        return $this->hasMany(Title::class, 'player_team_id');
    }

    public function events():HasMany
    {
        return $this->hasMany(GameEvent::class, 'player_team_id');
    }
}
