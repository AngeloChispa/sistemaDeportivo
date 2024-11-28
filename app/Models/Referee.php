<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Referee extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'people_id',
        'description'
    ];

    public function people():BelongsTo
    {
        return $this->belongsTo(People::class);
    }
}
