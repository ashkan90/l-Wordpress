<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
    	'site_title',
    	'site_slogan',
    	'site_email',
    	'site_language',
    	'home_page',
    	'post_page',
    	'privacy_page'
    ];
}
