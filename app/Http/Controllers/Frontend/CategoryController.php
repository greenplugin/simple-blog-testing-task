<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function showAction($slug)
    {
        $category = Category::where(['slug' => $slug])->firstOrFail();

        $articles = $category->articles()
            ->orderBy('created_at', 'desc')->orderBy('id', 'asc')
            ->paginate(config('display.page_size'));

        $categories = Category::orderBy('created_at', 'desc')->get();
        return view('frontend.category', [
            'category_slug' => $slug,
            'articles' => $articles,
            'categories' => $categories,
            'category' => $category
        ]);
    }
}
