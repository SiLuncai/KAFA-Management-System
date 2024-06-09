<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'totalStudentClass',
    ];

    protected $table = 'classes'; // Specifying the table name since 'Class' is a reserved word in PHP
}
