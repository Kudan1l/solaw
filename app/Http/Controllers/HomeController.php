<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function index() {
        $articles = Article::with('categories')->latest()->take(2)->get();
        // $consultants = Consultant::take(3)->get();
        return view("index", compact("articles"));
    }

    public function showArticle(Article $articles){
        return view("article.show", compact("articles"));
    }
}
