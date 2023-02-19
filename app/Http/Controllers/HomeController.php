<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    function index() {
        return view('home');
    }

    function article($id) {
        return view('article', ['id' => $id]);
    }
}
