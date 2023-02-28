<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function article($id) {

            $article = Article::findOrFail($id);

            // dd($article->content);
            

        return view('article', ['article' => $article]);
    }
}
