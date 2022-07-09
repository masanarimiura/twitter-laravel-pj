<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    protected $fillable = ['body'];

    public static $rules = array(
        'content' => 'required',
    );

    public function tweets() {
        return $this->hasMany('App\Tweet');
    }
}