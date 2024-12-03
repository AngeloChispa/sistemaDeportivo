<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Instalation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'country',
        'state',
        'city',
        'capacity'
    ];

    public function game():BelongsToMany
    {
        return $this->belongsToMany(Game::class)->withPivot('id', 'instalation_id', 'game_id', 'reserve_date', 'start_hour', 'end_hour');
    }
}
