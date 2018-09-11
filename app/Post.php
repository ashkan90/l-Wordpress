<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
	use softDeletes;
	protected $dates = ['deleted_at'];
    protected $fillable = [
    	'title',
    	'slug',
    	'subtitle',
    	'content',
    	'featured',
        'post_status',
        'comment_status',
        'post_link',
    	'user_id' 
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function categories(){
    	return $this->belongsToMany('App\Category', 'post_category');
    }

    public function tags(){
    	return $this->belongsToMany('App\Tag');
    }
}
