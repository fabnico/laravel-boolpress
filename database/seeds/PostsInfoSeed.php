<?php

use Illuminate\Database\Seeder;
use App\Posts_info;
class PostsInfoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Posts_info::class, 200)->create()->each(
      function ($el){
      $el->save();
      }
      );
    }
}
