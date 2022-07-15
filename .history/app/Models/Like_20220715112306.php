<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public function tweet() {
        return $this->belongsTo('App\Models\Tweet');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
