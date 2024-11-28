<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CoachTeamAssignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'assignment_date'
    ];

    public function title():HasOne
    {
        return $this->hasOne(Title::class, 'trainer_team_id');
    }
}
