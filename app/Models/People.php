<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class People extends Model
{
    use HasFactory;

    public $timestamps = false; 

    protected $fillable = [
        'name',
        'lastname',
        'birthdate',
        'birthplace',
        'nationality_id',
        'avatar'
    ];

    public function user():HasOne
    {
        return $this->hasOne(User::class);
    }

    public function player():HasOne
    {
        return $this->hasOne(Player::class);
    }
}
