<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
	
	protected $fillable = ['name'];
	
	public function accounts(){
	    return $this->hasMany('App\Account', 'category_id');
	}
	
	

	
}