<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
   protected $table = 'posts';

   public function post_cat(){
      return $this->belongsTo('App\Categories', 'category_id');
   }
   public function post_post_info(){
      return $this->hasOne('App\Posts_info', 'post_id');
   }
   public function  post_tag(){
      return $this->belongsToMany('App\Tags', 'posttag', 'post_id', 'tag_id');
   }
}
