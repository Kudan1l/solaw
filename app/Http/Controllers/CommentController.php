<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'content' => 'required|string|max:1000',  // Gantilah sesuai kebutuhan
            'thread_id' => 'required|exists:threads,id', // Pastikan thread_id valid
        ]);

        // Simpan komentar baru
        $comment = new Comment();
        $comment->content = $request->content;
        $comment->thread_id = $request->thread_id;
        $comment->user_id = Auth::id();  // Menambahkan ID pengguna yang mengomentari
        $comment->save();

        // Redirect ke halaman thread atau ke tempat yang diinginkan
        return redirect()->route('threads.show', $request->thread_id)
            ->with('success', 'Komentar berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        // Hanya admin yang dapat menghapus komentar
        if (Auth::user()->role == 'admin') {
            $comment->delete();
        }

        return redirect()->back()->with('success', 'Komentar berhasil dihapus!');
    }
}
