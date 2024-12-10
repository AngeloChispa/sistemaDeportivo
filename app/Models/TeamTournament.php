<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamTournament extends Model
{
    use HasFactory;

    public $table = 'team_tournament';

    public $timestamps = false;

    protected $fillable = [
        'tournament_id',
        'team_id',
        'wins',
        'draws',
        'losses',
        'points'
    ];
}
