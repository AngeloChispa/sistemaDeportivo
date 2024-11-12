<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'height',
        'weight',
        'dominant_side',
        'birthplace',
        'nationality'
    ];
}
