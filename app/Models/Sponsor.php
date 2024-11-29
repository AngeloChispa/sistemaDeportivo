<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sponsor extends Model
{

    public $timestamps = false; 

    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'email',
        'location',
        'type',
    ];

    public function users():BelongsToMany
    {
        return $this->belongsToMany(User::class, 'sponsor_user')->withPivot('mount', 'date_hour', 'concept', 'type');
    }
}