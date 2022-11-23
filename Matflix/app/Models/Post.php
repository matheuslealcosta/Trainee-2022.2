<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post Extends Model
{

    protected $fillable = [
        'title',
        'content',
        'author',
        'image',
        'created'  
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}