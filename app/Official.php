<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    protected $table = 'officials';
	
	protected $fillable = ['title', 'name','role','url'];
	
	
	
	
	
}