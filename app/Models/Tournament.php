<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tournament extends Model
{
    public $timestamps = false;

    use HasFactory;
    protected $fillable = [
        'name',
        'icon',
        'type',
        'start_date',
        'end_date',
        'description'
    ];

    public function games():HasMany
    {
        return $this->hasMany(Game::class);
    }

    public function team():BelongsToMany
    {
        return $this->belongsToMany(Team::class);
    }

    public function sport():BelongsTo
    {
        return $this->belongsTo(Sport::class);
    }

    public function teams():BelongsToMany
    {
        return $this->belongsToMany(Team::class)->withPivot('wins','draws','losses','points');
    }
}
