<?php

namespace App\Http\Controllers\Frontend;

use App\Article;
use App\Category;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function showAction($categorySlug, $slug)
    {
        $article = Article::where(['slug' => $slug])->firstOrFail();
        $categories = Category::orderBy('created_at', 'desc')->get();
        return view('frontend.article', [
            'category_slug' => $categorySlug,
            'article' => $article,
            'categories' => $categories
        ]);
    }
}
