<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'birthdate',
        'birthplace',
        'nationality_id',
        'avatar'
    ];
}
