<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Player extends Model
{

    public $timestamps = false; 

    use HasFactory;
    protected $fillable = [
        'people_id',
        'status',
        'height',
        'bestSide'
    ];

    public function people ():BelongsTo
    {
        return $this->belongsTo(People::class);
    }

    public function teams():BelongsToMany
    {
        return $this->belongsToMany(Team::class)->withPivot('position','dorsal','assignment_date','departure_date','captain');
    }

    public function game():BelongsToMany
    {
        return $this->belongsToMany(Game::class, 'game_events')->withPivot('event', 'minute');
    }
}