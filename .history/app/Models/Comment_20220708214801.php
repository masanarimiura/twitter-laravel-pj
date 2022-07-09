<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'content' => 'required|max:120',
    );

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function tweet() {
        return $this->belongsTo('App\Models\Tweet');
    }

    public static function userComments($id)
    {   
        return Comment::where('tweet_id', $id)->get();
    }
}
