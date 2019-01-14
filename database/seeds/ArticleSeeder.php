<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param \Faker\Generator $faker
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        $categories = \App\Category::all();
        foreach ($categories as $category) {
            for ($index = 0; $index < 10; $index++) {
                $title = $faker->words(3, true);
                $article = \App\Article::create([
                    'title' => $title,
                    'slug' => sprintf(str_replace(' ', '_', $title) . '_%s_%s', $index, $category->id),
                    'category_id' => $category->id
                ]);
                $article->content = file_get_contents(base_path() . '/README.MD');
                $article->save();
            }
        }
    }
}
