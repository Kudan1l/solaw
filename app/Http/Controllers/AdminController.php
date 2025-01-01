<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Consultant;
use App\Models\Article;
use App\Models\Category;
use App\Models\Specialty;
use App\Models\User;

class AdminController extends Controller
{
    public function viewDashboard()
    {
        $totalArticle = Article::count();
        $publishedCount = Article::where('status', 'publish')->count();
        $draftCount = Article::where('status', 'draft')->count();

        $totalConsultant = Consultant::count();

        $totalUser = User::where('role', 'user')->count();

        return view('dashboard.admin.view', 
        compact('totalArticle', 'publishedCount', 'draftCount', 'totalConsultant', 'totalUser'));
    }

    public function viewArticle() 
    {
        $articles = Article::orderBy('created_at', 'desc')->get();

        return view('dashboard.admin.article.view', compact('articles'));
    }

    public function viewConsultant() {
        $consultant = Consultant::all();

        return view('dashboard.admin.consultant.view', compact('consultant'));
    }

    public function viewUser() {
        $user = User::where('role', 'user')->get();
        
        return view('dashboard.admin.user.view', compact('user'));
    }
    public function viewAdmin() {
        $user = User::where('role', 'admin')->get();
        
        return view('dashboard.admin.admin.view', compact('user'));
    }

    public function viewFormAdmin()
    {
        return view('dashboard.admin.admin.add');
    }

    public function viewFormArticle()
    {
        $category = Category::all();
        return view('dashboard.admin.article.add', compact('category'));
    }

    public function viewFormConsultant()
    {
        $speciality = Specialty::all();
        return view('dashboard.admin.consultant.add', compact('speciality'));
    }

    public function storeArticle(Request $request) 
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'content' => 'required|string',
            'thumbnail_url' => 'nullable|url',
            'status' => 'required|in:draft,publish',
            'categories' => 'required|array',
        ]);

        $article = Article::create($request->only(['title', 'description', 'content', 'thumbnail_url', 'status']));
        $article->categories()->sync($request->categories);
        
        return redirect()->route('dashboard.article.index')->with('success', 'Article created successfully!');
    }

    public function storeAdmin(Request $request)
    {
        $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'max:50'],
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'in:user,admin',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = "admin";
        $user->save();

        return redirect()->route('dashboard.admin.index')->with('success', 'Admin added successfully!');
    }

    public function storeConsultant(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required',
            'phone_number' => 'required|integer',
            'experience_year' => 'required|integer',
            'about' => 'required|string',
            'profile_photo' => 'required|string',
            'education' => 'required|string',
            'location' => 'required|string',
            'specialities' => 'required|array'
        ]);

        $consultant = Consultant::create($request->only(['name', 'email', 'phone_number', 'experience_year', 'about', 'profile_photo', 'education', 'location']));
        $consultant->specialties()->sync($request->specialities);

        return redirect()->route('dashboard.consultant.index')->with('success', 'Consultant added successfully!');
    }

    public function viewEditAdmin(User $user)
    {
        return view("dashboard.admin.admin.edit",compact('user'));
    }

    public function viewEditArticle(Article $article)
    {
        $category = Category::all();
        $articleCategories = $article->categories->pluck('id')->toArray();
        return view('dashboard.admin.article.edit', compact('article', 'category', 'articleCategories'));
    }

    public function viewEditConsultant(Consultant $consultant)
    {
        $speciality = Specialty::all();
        $consultantSpecialties = $consultant->specialties->pluck('id')->toArray();
        return view('dashboard.admin.consultant.edit', compact('consultant','speciality', 'consultantSpecialties'));
    }

    public function storeCategory(Request $request) 
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        Category::create(['name' => $request->name]);
        return redirect()->back();
    }

    public function storeSpeciality(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        Specialty::create(['name' => $request->name]);
        return redirect()->back();
    }

    public function updateAdmin(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'max:50'],
            'email' => 'required|email|unique:users,email,' . $user->id, // Tambahkan koma
            'password' => 'nullable|min:6',
        ]);

        // Update atribut
        $user->name = $request->name;
        $user->email = $request->email;

        // Update password jika diisi
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Simpan perubahan
        $user->save();

        // Redirect ke halaman dashboard dengan pesan sukses
        return redirect()->route('dashboard.admin.index')->with('success', 'Admin updated successfully!');
    }

    public function updateArticle(Request $request, Article $article) 
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'content' => 'required|string',
            'thumbnail_url' => 'nullable|url',
            'status' => 'required|in:draft,publish',
            'categories' => 'required|array',
        ]);

        $article->update($request->only(['title', 'description', 'content', 'thumbnail_url', 'status']));
        $article->categories()->sync($request->categories);

        return redirect()->route('dashboard.article.index')->with('success', 'Article updated successfully!');
    }

    public function updateConsultant(Request $request, Consultant $consultant)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required',
            'phone_number' => 'required|integer',
            'experience_year' => 'required|integer',
            'about' => 'required|string',
            'profile_photo' => 'required|string',
            'education' => 'required|string',
            'location' => 'required|string',
            'specialities' => 'required|array'
        ]);

        $consultant->update($request->only(['name', 'email', 'phone_number', 'experience_year', 'about', 'profile_photo', 'education', 'location']));
        $consultant->specialties()->sync($request->specialities);

        return redirect()->route('dashboard.consultant.index')->with('success', 'Consultant updated successfully!');
    }
    
    public function destroyArticle(Article $article)
    {
        $article->categories()->detach();
        $article->delete();

        return redirect()->route('dashboard.article.index')->with('success', 'Article deleted successfully!');
    }

    public function destroyConsultant(Consultant $consultant)
    {
        $consultant->specialties()->detach();
        $consultant->delete();

        return redirect()->route('dashboard.consultant.index')->with('success', 'Consultant deleted successfully!');
    }

    public function destroyUser(User $user)
    {
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully!');
    }
}
