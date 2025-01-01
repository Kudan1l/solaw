@extends('layout.threads')

@section('sidebar')
<h1><a href="/threads" class="text-decoration-none">Forum Diskusi</a></h1>

<!-- Form untuk Menambahkan Komentar -->
@if (Auth::check()) <!-- Pastikan hanya pengguna yang login yang bisa mengirim komentar -->
<div class="add-comment mt-4">
    <form action="{{ route('comment.store') }}" method="POST" class="form-thread">
        <h4>Tambah Komentar</h4>
        @csrf
        <div class="mb-3">
            <label for="content" class="form-label">Komentar</label>
            <textarea id="content" name="content" class="form-control" rows="2" required></textarea>
        </div>
        <input type="hidden" name="thread_id" value="{{ $thread->id }}">
        <button type="submit" class="btn btn-komentar">Kirim Komentar</button>
    </form>
</div>
@else
<!-- Pesan bagi pengguna yang belum login -->
<p>Silakan <a href="{{ route('login') }}">login</a> untuk menambahkan komentar.</p>
@endif
@endsection

@section('content')
<!-- Thread Content -->
<div class="thread-card mt-4">
    <h3>{{ $thread->title }}</h3>
    <p>{{ $thread->content }}</p>
    <p><strong>-</strong>Diposting oleh: <strong>{{ $thread->user->name ?? 'Anonim' }} </strong> pada: <strong>{{ $thread->created_at->format('d M Y, H:i') }}</strong></p>
</div>

@if (Auth::check() && (Auth::id() == $thread->user_id || Auth::user()->role == 'admin'))
    <!-- Tombol Edit -->
    <a href="{{ route('threads.edit', $thread->id) }}" class="btn btn-primary">Edit</a>

    <!-- Tombol Hapus -->
    <form action="{{ route('threads.destroy', $thread->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus thread ini?')">Hapus</button>
    </form>
@endif

<!-- Komentar Section -->
<div class="comment-section mt-5">
    <h4>Komentar</h4>
    @forelse ($thread->comments as $comment)
        <div class="comment mb-3">
            <!-- Menampilkan nama pengguna yang berkomentar -->
            <p><strong>{{ $comment->user->name ?? 'Anonim' }}</strong> - <small>{{ $comment->created_at->format('d M Y, H:i') }}</small></p>
            <p>{{ $comment->content }}</p>

            <!-- Hanya Admin yang dapat menghapus komentar -->
            @if (Auth::check() && Auth::user()->role == 'admin')
                <form action="{{ route('comment.destroy', $comment->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus komentar ini?')">Hapus</button>
                </form>
            @endif
        </div>
    @empty
        <p>Belum ada komentar. Jadilah yang pertama untuk memberikan komentar!</p>
    @endforelse
</div>
@endsection
