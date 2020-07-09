<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "tb_album";
    protected $primaryKey = "id";
    protected $fillable = ['album_name', 'album_text', 'album_pho_id'];

     public function Photo()
  {
      return $this->belongsTo('App\Photo', 'album_pho_id', 'id');  
   }
}
