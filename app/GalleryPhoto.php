<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryPhoto extends Model
{
    protected $table = 'gallery_photos';
	
	protected $fillable = ['gallery_id','url'];
	

	
	
}