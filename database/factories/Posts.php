<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posts;
use Faker\Generator as Faker;

$factory->define(Posts::class, function (Faker $faker) {
    return [
      'category_id'=> $faker->numberBetween(1,30),
      'title' => $faker->sentence(),
      'author'=> $faker->name()
    ];
});
