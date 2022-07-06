<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    use HasFactory;

    public function Tweets() {
        return $this->hasMany('App\Models\Tweet');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

}
