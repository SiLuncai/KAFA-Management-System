<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'time',
        'involvement', // Assuming this corresponds to 'studentInvolved'
        'location',    // Assuming this corresponds to 'venue'
        'participant_count',
        'impact',
        'budget',
        'created_at',
        'updated_at',
    ];
}
