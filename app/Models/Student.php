<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'gender',
        'myKidNo',
        'weight',
        'height',
        'disability',
        'allergy',
        'diseaseType',
        'class_id',
        'school_id',
        'year_id',
        'exam_id',
    ];
}

