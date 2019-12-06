<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MpesaCode extends Model
{
    protected $table = 'mpesa_codes';
	
	protected $fillable = ['account_id','code'];
	
	public function account(){
	    return $this->belongsTo('App\Account', 'account_id');
	}

	
}