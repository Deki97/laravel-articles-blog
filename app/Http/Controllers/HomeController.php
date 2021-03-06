<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $articles = Article::all();

        $data = [
            'articles' => $articles
        ];

        return view('home', $data);
    }
}
