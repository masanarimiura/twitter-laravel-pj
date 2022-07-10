<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    

    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required|max:20',
        'email' => 'required|unique:posts|email',
        'password' => 'required|min:6',
        'uid' 
    );

    public function tweets() {
        return $this->hasMany('App\Models\Tweet');
    }

    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }
    
    public function likes() {
        return $this->hasMany('App\Models\Like');
    }
}
