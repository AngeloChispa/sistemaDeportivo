<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Instalation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'state',
        'city',
        'capacity',
        'nationality_id'
    ];


    public function reservations():HasMany
    {
        return $this->hasMany(Reservation::class);
    }

    public function nationality():BelongsTo
    {
        return $this->belongsTo(Nationality::class);
    }
    
}
