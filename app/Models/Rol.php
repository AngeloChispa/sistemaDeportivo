<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rol extends Model
{

    public $timestamps = false; 

    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function user():HasMany
    {
        return $this->hasMany(User::class);
    }
}
