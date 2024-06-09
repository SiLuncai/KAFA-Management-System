<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'myKidNo',
        'weight',
        'height',
        'disability',
        'allergy',
        'diseaseType',
        'classes_id',
        'school_id',
        'year_id',
        'exam_id',
    ];
}

