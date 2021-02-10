<?php

use Illuminate\Database\Seeder;
use App\Categories;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Categories::class, 30)->create()->each(
      function ($el){
      $el->save();
      }
      );
    }
}
