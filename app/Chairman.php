<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chairman extends Model
{
    protected $table = 'chairmen';
	
	protected $fillable = ['account_id','sub_committee_id'];
	
	public function sub_committee(){
	    return $this->belongsTo('App\SubCommittee', 'sub_committee_id');
	}

	
}