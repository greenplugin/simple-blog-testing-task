<?php

namespace App\Http\Controllers\Frontend;

use App\Article;
use App\Category;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function articlesAction()
    {
        $categories = Category::orderBy('updated_at', 'asc')->get();
        $articles = Article::orderBy('updated_at', 'asc')->paginate(config('display.page_size'));

        return view('frontend.blog', ['categories' => $categories, 'articles' => $articles]);
    }
}
