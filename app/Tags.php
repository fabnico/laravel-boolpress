<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
   protected $table = 'tags';

   public function  tag_post(){
      return $this->belongsToMany('App\Posts', 'posttag', 'tag_id', 'post_id');
   }
}
