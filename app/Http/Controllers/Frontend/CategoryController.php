<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * @param Category $category
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Category $category)
    {
        $articles = $category->articles()
            ->orderBy('created_at', 'desc')
            ->orderBy('id', 'asc')
            ->paginate(config('display.page_size'));

        $categories = Category::orderBy('created_at', 'desc')->get();

        return view('frontend.category', [
            'category_slug' => $category->slug,
            'articles' => $articles,
            'categories' => $categories,
            'category' => $category
        ]);
    }
}
