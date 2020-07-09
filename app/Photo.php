<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'tb_photo';
    protected $primarykey = 'id';
    protected $fillable = ['pho_date','gambar', 'pho_tittle', 'pho_text',  'pho_post_id'];
 

	 public function Post()
	  {
	      return $this->belongsTo('App\Post', 'pho_post_id', 'id');  
	   }

    public function Album()
    {
    	return $this->hasMany('App\Album', 'id');
    }
}
