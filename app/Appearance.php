<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appearance extends Model
{
    protected $fillable = [
    	'name',
    	'src',
    	'width',
    	'height'
    ];

    public function theme()
    {
    	return $this->belongsTo('app\Theme');
    }
}
