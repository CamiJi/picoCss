<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    
    function index() {
        $articles = Article::latest()->take(3)->get();
        return view('home', ['articles' => $articles]);
    }


}
