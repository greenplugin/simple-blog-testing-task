<?php

namespace App\Http\Controllers\Panel;

use App\Article;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleCreateRequest;
use App\Http\Requests\ArticleUpdateRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listAction()
    {
        $articles = Article::orderBy('created_at', 'desc')
            ->orderBy('id', 'asc')
            ->paginate(config('display.page_size'));

        return view('panel.articles', ['articles' => $articles]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createFormAction()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();

        return view('panel.article_create', ['categories' => $categories]);
    }

    /**
     * @param ArticleCreateRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createAction(ArticleCreateRequest $request)
    {
        $article = Article::create($request->all());

        return redirect()->route('manager.article.edit.form', ['slug' => $article->slug]);
    }

    /**
     * @param string $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editFormAction(string $slug)
    {
        $categories = Category::orderBy('updated_at', 'asc')->get();
        $article = Article::where(['slug' => $slug])->firstOrFail();

        return view('panel.article_edit', ['article' => $article, 'categories' => $categories]);
    }

    /**
     * @param string $slug
     * @param ArticleUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function editAction(string $slug, ArticleUpdateRequest $request)
    {
        $article = Article::where(['slug' => $slug])->firstOrFail();
        $article->slug = $request->get('slug');
        $article->title = $request->get('title');
        $article->content = $request->get('content');
        $article->save();

        return redirect()->route('manager.articles.list');
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function deleteAction(Request $request)
    {
        $article = Article::where(['slug' => $request->get('slug')])->firstOrFail();
        $article->delete();

        return JsonResponse::create();
    }
}
