<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ike extends Model
{
    use HasFactory;

    public function Tweets() {
        return $this->hasMany('App\Models\Tweet');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public static function userLikes($id)
    {   
        return Likes::where('tweet_id', $id)->get();
    }
}
