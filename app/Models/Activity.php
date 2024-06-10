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
        'venue',
        'studentInvolved',
    ];

    public function finalActivityReports()
    {
        return $this->hasMany(FinalActivityReport::class, 'activity_id');
    }
}
