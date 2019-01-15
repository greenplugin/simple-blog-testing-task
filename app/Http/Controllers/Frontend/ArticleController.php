<?php

namespace App\Http\Controllers\Frontend;

use App\Article;
use App\Category;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * @param Category $category
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Category $category, Article $article)
    {
        $categories = Category::orderBy('created_at', 'desc')->get();
        return view('frontend.article', [
            'category_slug' => $category->slug,
            'article' => $article,
            'categories' => $categories
        ]);
    }
}
