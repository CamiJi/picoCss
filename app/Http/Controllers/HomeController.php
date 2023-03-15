<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    
    function index(Request $request) {

        $currentPage = (isset($request->page)) ? $request->page : 1;
        $previousPage = ($currentPage > 1) ? $currentPage - 1 : null;
        $articles = Article::find(1)
               ->orderBy('published_at', 'desc')
               ->paginate(2);
        $nextPage = ($currentPage >= $articles->lastPage()) ? null : $currentPage + 1;

        return view('home', ['articles' => $articles,
                            'nextPage' => $nextPage,
                            'previousPage' => $previousPage,]);
    }


}
