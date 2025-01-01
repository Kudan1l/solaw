<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class HomeController extends Controller
{
    public function index() {
        $articles = Article::where('status', 'publish')->with('categories')->latest()->take(3)->get();
        // $consultants = Consultant::take(3)->get();
        return view("index", compact("articles"));
    }

    public function articleMenu(Request $request){
        $selectedCategories = $request->input('categories', []);

        if ($selectedCategories) {
            $articles = Article::where('status', 'publish')->whereHas('categories', function($query) use ($selectedCategories) {
                $query->whereIn('categories.id', $selectedCategories);
            })->get();
        } else {
            $articles = Article::where('status', 'publish')->with('categories')->get();
        }

        $categories = Category::all();
        return view("article.article_menu", compact("articles", "categories"));
    }

    public function showArticle($id) {
        $articles = Article::where('status', 'publish')->with('categories')->findOrFail($id);
        return view("article.article_detail", compact("articles"));
    }
}
