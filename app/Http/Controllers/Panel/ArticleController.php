<?php

namespace App\Http\Controllers\Panel;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function listAction()
    {
        $articles = Article::all();

        return view('panel.articles', ['articles' => $articles]);
    }

    public function createFormAction()
    {

    }

    public function createAction(Request $request)
    {

    }

    public function editFormAction()
    {

    }

    public function editAction()
    {

    }
}
