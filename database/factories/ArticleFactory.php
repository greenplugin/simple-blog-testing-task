<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    $title = $faker->unique()->words(3, true);
    return [
        'title' => $title,
        'slug' => \Illuminate\Support\Str::slug($title),
        'content' => file_get_contents(base_path() . '/README.MD')
    ];
});
