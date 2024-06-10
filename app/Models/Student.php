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

    public function school()
    {
        return $this->belongsTo(School::class, 'school_id');
    }

    public function class()
    {
        return $this->belongsTo(ClassModel::class, 'classes_id');
    }

    public function year()
    {
        return $this->belongsTo(Year::class, 'year_id');
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class, 'exam_id');
    }

    public function subjectResults()
    {
        return $this->hasMany(SubjectResult::class, 'student_id');
    }

    public function studentActivities()
    {
        return $this->hasMany(StudentActivity::class, 'student_id');
    }
}
