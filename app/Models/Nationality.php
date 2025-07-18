<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Nationality extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'country'
    ];

    public function people():HasMany
    {
        return $this->hasMany(People::class);
    }

    public function instalations():HasMany
    {
        return $this->hasMany(Instalation::class);
    }
}
