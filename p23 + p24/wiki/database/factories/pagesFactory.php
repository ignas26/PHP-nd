<?php

use Faker\Generator as Faker;

$factory->define(App\pages::class, function (Faker $faker) {
    return [
        'created_at' => $faker->date($format = 'Y-m-d'),
        'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
         'content' => $faker->text,
         'title' => $faker->title,
         'category_id' => $faker->ean8,
         'author_id' => $faker->ean8,
         'published' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});