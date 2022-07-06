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

    public function comment() {
        return $this->hasMany('App\Tweet');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function like() {
        return $this->belongsTo('App\Like');
    }
}
