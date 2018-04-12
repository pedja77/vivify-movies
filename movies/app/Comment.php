<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'content',
        'movie_id'
    ];

    public function movie() {
        return $this->belongsTo('App\Movie');
    }
}
