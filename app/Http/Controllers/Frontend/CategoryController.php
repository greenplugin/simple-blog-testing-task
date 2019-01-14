<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function showAction($slug)
    {
        $category = Category::where(['slug' => $slug])->with('articles')->firstOrFail();

        $categories = Category::orderBy('updated_at', 'asc')->get();
        return view('frontend.category', [
            'category_slug' => $slug,
            'articles' => $category->articles()->paginate(config('display.page_size')),
            'categories' => $categories,
            'category' => $category
        ]);
    }
}
