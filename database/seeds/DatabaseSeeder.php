<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, 20)->create()->each(function (\App\Category $category) {
            factory(App\Article::class, 20)->make()->each(function (\App\Article $article) use ($category) {
                $category->articles()->save($article);
            });
        });
    }
}
