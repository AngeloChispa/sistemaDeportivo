<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Title extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'date',
        'description'
    ];

    public function trainerTeam():BelongsTo
    {
        return $this->belongsTo(CoachTeamAssignment::class, 'trainer_team_id');
    }

    public function playerTeam():BelongsTo
    {
        return $this->belongsTo(PlayerTeam::class, 'player_team_id');
    }
}
