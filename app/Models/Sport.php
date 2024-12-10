<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sport extends Model
{

    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function teams():HasMany
    {
        return $this->hasMany(Team::class);
    }

    public function tournaments():HasMany
    {
        return $this->hasMany(Tournament::class);
    }
}
