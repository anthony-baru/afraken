<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    protected $table = 'contributions';
	
	protected $fillable = ['account_id','amount','description','date'];
	
	public function account(){
	    return $this->belongsTo('App\Account', 'account_id');
	}

	
}