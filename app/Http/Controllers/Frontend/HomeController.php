<?php

namespace App\Http\Controllers\Frontend;

use App\Article;
use App\Category;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function articlesAction()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();
        $articles = Article::orderBy('updated_at', 'desc')
            ->orderBy('id', 'asc')
            ->paginate(config('display.page_size'));;

        return view('frontend.blog', ['categories' => $categories, 'articles' => $articles]);
    }
}
