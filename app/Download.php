<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $table = 'downloads';
	
	protected $fillable = ['description', 'url'];
	
	
	
	
	
}