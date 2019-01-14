<?php

namespace App\Http\Controllers\Panel;

use App\Category;
use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryUpdateRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listAction()
    {
        $categories = Category::orderBy('updated_at', 'asc')->paginate(config('display.page_size'));

        return view('panel.categories', ['categories' => $categories]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createFormAction()
    {
        return view('panel.category_create');
    }

    /**
     * @param CategoryCreateRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createAction(CategoryCreateRequest $request)
    {
        Category::create($request->all());

        return redirect(route('manager.categories.list'));
    }

    /**
     * @param string $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editFormAction(string $slug)
    {
        $category = Category::where(['slug' => $slug])->firstOrFail();
        return view('panel.category_edit', ['category' => $category]);
    }

    /**
     * @param string $slug
     * @param CategoryUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function editAction(string $slug, CategoryUpdateRequest $request)
    {
        $category = Category::where(['slug' => $slug])->firstOrFail();
        $category->slug = $request->get('slug');
        $category->title = $request->get('title');
        $category->save();

        return redirect(route('manager.categories.list'));
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function deleteAction(Request $request)
    {
        $article = Category::where(['slug' => $request->get('slug')])->firstOrFail();
        $article->delete();

        return JsonResponse::create();
    }
}
