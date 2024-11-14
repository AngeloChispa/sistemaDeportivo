<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoachTeamAssignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'assignment_date'
    ];
}
