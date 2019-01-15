<?php

use Faker\Generator as Faker;

$factory->define(\App\Category::class, function (Faker $faker) {
    $title = $faker->unique()->words(2, true);
    return [
        'slug' => \Illuminate\Support\Str::slug($title),
        'title' => $title
    ];
});
