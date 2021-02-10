<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posts_info;
use Faker\Generator as Faker;

$factory->define(Posts_info::class, function (Faker $faker) {
    return [
      'post_id' => $faker->unique()->numberBetween(1,200),
      'description' => $faker->paragraph(),
      'slug' => $faker->slug()
    ];
});
