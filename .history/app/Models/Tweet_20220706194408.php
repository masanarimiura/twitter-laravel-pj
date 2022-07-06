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

    // user_idと一致するやつを引き出すようにしたい
    public function userTweets()
    {
        $txt = 'ID:'.$this->id . ' ' . $this->name . '(' . $this->age .  '才'.') '.$this->nationality;
        return $txt;
    }
}
