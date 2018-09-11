<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
    	'avatar',
    	'about',
    	'user_id',
    	'facebook',
    	'twitter',
    	'pinterest',
    	'instagram',
    	'hobbies'
    ];

    public function user()
    {
    	return $this->belongsTo('app\User');
    }
}
