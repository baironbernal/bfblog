<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'author' => $faker->email,
        'file' => $faker->name,
        'description' => $faker->name,
        'category_id' => 1,
    ];
});
