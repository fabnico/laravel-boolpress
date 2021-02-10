<?php

use Illuminate\Database\Seeder;
use App\posts;
use App\Tags;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class posttagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(Faker $faker)
     {
       $posts = Posts::all();
       $tags = Tags::all();
       foreach ($posts as $post) {
         for ($i = 1; $i <= $faker->numberBetween(1, $tags->count()); $i++) {
           DB::table('posttag')->insert([
             'post_id' => $post->id,
             'tag_id' => $i
           ]);
         }
       }
     }
}
