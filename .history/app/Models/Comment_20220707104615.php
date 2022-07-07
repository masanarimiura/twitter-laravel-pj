<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'content' => 'required',
    );

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function tweet() {
        return $this->belongsTo('App\Models\Tweet');
    }

    public static function userCts($id)
    {   
        return Tweet::where('user_id', $id)->get();
    }
}
