<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bulletin extends Model
{
    use HasFactory;
        
    protected $table = 'bulletins'; // Set the table name to 'bulletins'
        protected $primaryKey = 'bulletinID'; // Set the primary key to 'bulletinID'

        protected $fillable = [
            'teacherID',
            'titleBulletin',
            'descBulletin',
            'comment',
            'like', 
        ];
}
