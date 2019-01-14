<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param \Faker\Generator $faker
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        for ($index = 0; $index < 20; $index++) {
            \App\Category::create(['title' => $faker->words(1, true), 'slug' => 'category_slug_' . $index]);
        }
    }
}
