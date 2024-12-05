<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Trainer extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'people_id',
        'description'
    ];

    public function assignment():HasMany
    {
        return $this->hasMany(CoachTeamAssignment::class);
    }

    public function people():BelongsTo
    {
        return $this->belongsTo(People::class);
    }
}