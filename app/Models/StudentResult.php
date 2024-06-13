<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentResult extends Model
{
    use HasFactory;

    protected $table='_student_result';

    protected $fillable = [
        'name',	
        'marks',	
        'grade',	
        'sudah_ditafsir'

    ];

}
