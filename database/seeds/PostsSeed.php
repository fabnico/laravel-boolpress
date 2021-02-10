<?php

use Illuminate\Database\Seeder;
use App\Posts;

class PostsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Posts::class, 200)->create()->each(
      function ($el){
      $el->save();
      }
      );
    }
}
