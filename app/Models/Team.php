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

    public $timestamps = false;

    protected $fillable = [
        'name',
        'state',
        'city',
        'shield'
    ];

    public function sport():BelongsTo
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
        return $this->belongsToMany(Player::class)->withPivot('position','dorsal','assignment_date','departure_date','captain');
    }

    public function tournament():BelongsToMany
    {
        return $this->belongsToMany(Tournament::class)->withPivot('wins','draws','losses','points');
    }

   /*  public function team():BelongsToMany
    {
        return $this->belongsToMany(Team::class);
    } */


}
