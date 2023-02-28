<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    
    function index(Request $request) {

        $currentPage = $request->page;
        $nextPage = $currentPage + 1;
        $previousPage = ($currentPage > 1) ? $currentPage - 1 : null;
        $articles = Article::paginate(3);
        // dd($articles);

        return view('home', ['articles' => $articles,
                            'nextPage' => $nextPage,
                            'previousPage' => $previousPage]);
    }


}
