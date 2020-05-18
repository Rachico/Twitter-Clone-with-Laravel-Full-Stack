<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use Likable;

    protected $fillable = [
        'user_id',
        'body'
    ];

    public function user ()
    {
        return $this->belongsTo(User::class);
    }

}

//$user = App\User::first();
//$tweet = App\Tweet::first();
