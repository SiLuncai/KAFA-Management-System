<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activity';
    protected $primaryKey = 'activityID';

    protected $fillable = ['activityID', 'activityName', 'date', 'time', 'studentInvolved', 'venue'];

}
