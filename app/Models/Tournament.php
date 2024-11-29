<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
}
