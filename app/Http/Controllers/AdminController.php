<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultant;
use App\Models\Article;
use App\Models\Category;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::all();
        $consultant = Consultant::all();

        $publishedCount = Article::where('status', 'publish')->count();
        $draftCount = Article::where('status', 'draft')->count();

        $activeTab = $request->input('tab', 'dashboard');

        return view('dashboard.admin.admin', compact('articles', 'articles', 'publishedCount', 'draftCount', 'activeTab'));
    }

    public function create() {
        $categories = Category::all();
        return view('dashboard.admin.add_article', compact('categories'));
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'thumbnail_url' => 'required|url',
            'status' => 'required|in:draft,publish',
        ]);

        Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'status' => $request->status,
            'thumbnail_url' => $request->thumbnail_url,
        ]);
        return redirect()->route('dashboard.admin')->with('success', 'Artikel berhasil dibuat!');
    }

    public function storeCategories(Request $request) {
        $request->validate(['name' => 'required']);

        Category::create(['name' => $request->name]);

        return redirect()->route('dashboard.store.category');
    }

    public function edit(Article $article) {
        $categories = Category::all();
        
        return view('dashboard.admin.edit', compact('article', 'categories'));
    }

    public function update(Request $request, Article $article)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required|',
            'content' => 'required',
            'description' => 'required',
            'thumbnail_url' => 'required',
            'status' => 'required|in:publish,draft',
        ]);

        // Update artikel
        $article->update($validated);

        // Redirect setelah update
        return redirect()->route('dashboard.admin')->with('success', 'Artikel berhasil diperbarui!');
    }

    public function destroy(Article $article)
    {
        // Hapus artikel
        $article->delete();

        // Redirect ke halaman artikel dengan pesan sukses
        return redirect()->route('dashboard.admin')->with('success', 'Artikel berhasil dihapus');
    }

}
