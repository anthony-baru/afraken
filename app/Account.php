<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'accounts';
	
	protected $fillable = ['first_name','last_name','phone_number','status','sub_committee_id','category_id','degree','university','employer','payment'];
	
public function sub_committee(){
	    return $this->belongsTo('App\SubCommittee', 'sub_committee_id');
	}
	public function category(){
	    return $this->belongsTo('App\Category', 'category_id');
	}
	public function user(){
		return $this->belongsToMany('App\User', 'user_account', 'account_id', 'user_id');
	}
	
	public function subcription(){
		return $this->belongsToMany('App\SubCommittee', 'committee_subscriptions', 'account_id', 'sub_committee_id');
	}
	public function chairman(){
			return $this->hasOne('App\Chairman', 'account_id', 'id');
		}
		
	public function contributions(){
			return $this->hasMany('App\Contribution', 'account_id', 'id');
		}
		public function mpesa_codes(){
			return $this->hasMany('App\MpesaCode', 'account_id', 'id');
		}	
	
}