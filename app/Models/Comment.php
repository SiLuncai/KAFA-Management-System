<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Bulletin;

class Comment extends Model
{
    protected $fillable = ['comment', 'user_id', 'bulletin_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bulletin()
    {
        return $this->belongsTo(Bulletin::class);
    }
}
