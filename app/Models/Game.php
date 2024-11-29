<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    
}
