<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $table = 'categories';

   public function catToPost(){
      return $this->hasMany('App\Post', 'category_id', 'id');
   }
}
