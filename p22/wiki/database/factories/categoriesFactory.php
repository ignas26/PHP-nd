<?php

use Faker\Generator as Faker;

$factory->define(App\categories::class, function (Faker $faker) {
    return [
              'created_at' => $faker->dateTime($max = 'now', $timezone = null),
              'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
              'name' => $faker->name,
              'order' => $faker->numberBetween($min = 1, $max = 100)
    ];
});