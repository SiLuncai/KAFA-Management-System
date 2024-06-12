<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'examType',
        'updateExamStats',
    ];

    public function students()
    {
        return $this->hasMany(Student::class, 'exam_id');
    }

    public function subjectResults()
    {
        return $this->hasMany(SubjectResult::class, 'exam_id');
    }
}
