<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('threads.create');
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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Simpan thread dengan ID user login
        Thread::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::id(), // ID user login
        ]);

        return redirect()->route('threads')->with('success', 'Thread berhasil dibuat.');
    }

    /**
     * Show the specified resource.
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
        // Cek apakah user yang sedang login adalah pembuat thread atau admin
        if (Auth::id() !== $thread->user_id && Auth::user()->role !== 'admin') {
            return redirect()->route('threads')->with('error', 'Anda tidak berhak mengedit thread ini.');
        }

        return view('threads.edit', compact('thread'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Thread $thread)
    {
        // Cek apakah user yang sedang login adalah pembuat thread atau admin
        if (Auth::id() !== $thread->user_id && Auth::user()->role !== 'admin') {
            return redirect()->route('threads')->with('error', 'Anda tidak berhak mengedit thread ini.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $thread->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('threads')->with('success', 'Thread berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Thread $thread)
    {
        // Cek apakah user yang sedang login adalah pembuat thread atau admin
        if (Auth::id() !== $thread->user_id && Auth::user()->role !== 'admin') {
            return redirect()->route('threads')->with('error', 'Anda tidak berhak menghapus thread ini.');
        }

        $thread->delete();
        return redirect()->route('threads')->with('success', 'Thread berhasil dihapus.');
    }
    
}
