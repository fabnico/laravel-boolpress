<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $table = 'posts';

   public function postToCat(){
      return $this->belongsTo('App\Category', 'category_id');
   }
   public function postToInfo(){
      return $this->hasOne('App\PostInformation', 'post_id');
   }
   public function  postToTag(){
      return $this->belongsToMany('App\Tag', 'post_tag', 'post_id', 'tag_id');
   }
}
