<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerTeamAssignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'dorsal',
        'assignment_date',
        'captain'
    ];
}
