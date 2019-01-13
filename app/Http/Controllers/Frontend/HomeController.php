<?php

namespace App\Http\Controllers\Frontend;

use App\Article;
use App\Category;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function articlesAction()
    {
        $categories = Category::all();
        $articles = Article::all();

        return view('frontend.blog', ['categories' => $categories, 'articles' => $articles]);
    }
}
