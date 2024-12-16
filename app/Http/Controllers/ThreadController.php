<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $threads = Thread::latest()->get();
        return view('threads.index', compact('threads'));
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Menampilkan form untuk membuat thread baru
        return view('threads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Simpan thread dengan ID user login
        $thread = Thread::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->id(), // Ambil ID pengguna yang sedang login
        ]);

        return redirect()->route('threads')->with('success', 'Thread berhasil dibuat.');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
    
        // Cari thread berdasarkan judul atau konten
        $threads = Thread::where('title', 'LIKE', "%$query%")
                         ->orWhere('content', 'LIKE', "%$query%")
                         ->get();
    
        // Kembalikan ke view dengan hasil pencarian
        return view('threads.index', compact('threads', 'query'));

    }
    

    /**
     * Display the specified resource.
     */
    public function show(Thread $thread)
    {
        return view('threads.show', compact('thread'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Thread $thread)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Thread $thread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Thread $thread)
    {
        //
    }
}
