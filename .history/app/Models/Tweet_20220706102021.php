<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

     protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'email' => 'required',
        'password' => 'required'
    );

    public function tweets() {
        return $this->hasMany('App\Tweet');
    }
}