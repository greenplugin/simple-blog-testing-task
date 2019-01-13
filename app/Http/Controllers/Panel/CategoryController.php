<?php

namespace App\Http\Controllers\Panel;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function listAction()
    {
        $categories = Category::all();

        return view('panel.categories', ['categories' => $categories]);
    }

    public function createFormAction()
    {
        return view('panel.category_create');
    }

    public function createAction(Request $request)
    {
        Category::create();
        return redirect(route('manager.categories.list'));
    }

    public function editFormAction(int $id)
    {

    }

    public function editAction(int $id, Request $request)
    {

    }
}
