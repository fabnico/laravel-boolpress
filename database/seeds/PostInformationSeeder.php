<?php

use Illuminate\Database\Seeder;
use App\PostInformation;
class PostInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(PostInformation::class, 200)->create()->each(
      function ($el){
      $el->save();
      }
      );
    }
}
