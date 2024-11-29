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

    public function assignment():BelongsTo
    {
        return $this->belongsTo(CoachTeamAssignment::class);
    }
}