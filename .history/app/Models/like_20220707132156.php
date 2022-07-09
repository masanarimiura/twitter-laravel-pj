<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

        protected $guarded = array('id');

    public function tweets() {
        return $this->hasMany('App\Models\Tweet');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public static function userLikes($id)
    {   
        return Like::where('tweet_id', $id)->get();
    }
    
    protected $guarded = ['id'];

}
