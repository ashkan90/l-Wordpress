<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    	'post_id',
    	'author',
    	'author_email',
    	'author_ip',
    	'content',
    	'approved',
    	'user_id'
    ];
}
