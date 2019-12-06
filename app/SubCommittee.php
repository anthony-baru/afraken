<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCommittee extends Model
{
    protected $table = 'sub_committees';
	
	protected $fillable = ['name'];
	
	public function accounts(){
	    return $this->hasMany('App\Account', 'sub_committee_id');
	}
	
	public function chairman(){
			return $this->hasOne('App\Chairman', 'sub_committee_id', 'id');
		}
		
		public function subcription1(){
		return $this->belongsToMany('App\Account', 'committee_subscriptions', 'sub_committee_id','account_id');
	}
	

	
}