<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bulletin extends Model
{
    use HasFactory;

    protected $primaryKey = 'bulletinID';

    protected $fillable = [
        'teacherID',
        'parentID',
        'titleBulletin',
        'descBulletin',
        'comment',
        'like'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacherID');
    }

    public function parent()
    {
        return $this->belongsTo(Parents::class, 'parentID');
    }
}