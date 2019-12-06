<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
	
	protected $fillable = ['title','description','venue','date','sub_committee_id'];
	
public function sub_committee(){
	    return $this->belongsTo('App\SubCommittee', 'sub_committee_id');
	}
	
	
}