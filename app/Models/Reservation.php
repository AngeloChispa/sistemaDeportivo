<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'reserve_date',
        'start_hour',
        'end_hour'
    ];

    public function game():BelongsTo
    {
        return $this->belongsTo(Game::class);
    }

    public function instalation():BelongsTo
    {
        return $this->belongsTo(Instalation::class);
    }
}
