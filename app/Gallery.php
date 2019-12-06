<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';
	
	protected $fillable = ['title','description','date','sub_committee_id'];
	
public function sub_committee(){
	    return $this->belongsTo('App\SubCommittee', 'sub_committee_id');
	}
	public function photo(){
			return $this->hasOne('App\GalleryPhoto', 'gallery_id', 'id');
		}
	
}