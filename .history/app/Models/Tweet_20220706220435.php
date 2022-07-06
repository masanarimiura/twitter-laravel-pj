<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'content' => 'required',
    );

    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function like() {
        return $this->belongsTo('App\Models\Like');
    }

    // nuxtからidもらって比較するつもりで書いている
    public function userTweets()
    {   
        $users = Tweet::all();
        $txt = $users->where('user_id', 3)->get();
        return $txt;
    }
}
