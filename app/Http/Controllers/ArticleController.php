<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function article($id) {
        try {
            $article = Article::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            dd($e->getMessage());
        }

        return view('article', ['article' => $article]);
    }
}
