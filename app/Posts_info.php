<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts_info extends Model
{
   protected $table = 'posts_information';

   public function post_info_post(){
      return $this->belongsTo('App\Posts','post_id','id');
   }
}
