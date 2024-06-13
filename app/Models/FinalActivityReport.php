<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalActivityReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'impact',
        'budget',
        'date_submitted',
    ];

    public function activity()
    {
        return $this->belongsTo(Activity::class, 'activity_id');
    }
}
