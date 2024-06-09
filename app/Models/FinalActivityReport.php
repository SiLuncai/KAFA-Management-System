<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalActivityReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_id',
        'student_id',
        'impact',
        'budget',
        'date_submitted',
    ];
}
