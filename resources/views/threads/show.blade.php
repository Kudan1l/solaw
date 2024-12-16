@extends('layout.threads') <!-- Menggunakan layout utama -->

@section('sidebar')
    <h1>Forum Diskusi</h1>
    <!-- Form untuk Menambahkan Komentar -->
    <div class="add-comment mt-4">
        <form action="{{ route('comment.store') }}" method="POST">
            <h4>Tambah Komentar</h4>
            @csrf
            <div class="mb-3">
                <label for="content" class="form-label">Komentar</label>
                <textarea id="content" name="content" class="form-control" rows="2" required></textarea>
            </div>
            <input type="hidden" name="thread_id" value="{{ $thread->id }}">
            <button type="submit" class="btn btn btn-komentar">Kirim Komentar</button>
        </form>
    </div>
@endsection

@section('content')
    <!-- Thread Content -->
    <div class="thread-card mt-4">
        <h3>{{ $thread->title }}</h3>
        <p>{{ $thread->content }}</p>
        <p><strong>Diposting pada:</strong> {{ $thread->created_at->format('d M Y, H:i') }}</p>
    </div>

    <!-- Komentar Section -->
    <div class="comment-section mt-5">
        <h4>Komentar</h4>
        @forelse ($thread->comments as $comment)
            <div class="comment mb-3">
                <p>{{ $comment->content }}</p>
                <p><small>Diposting pada: {{ $comment->created_at->format('d M Y, H:i') }}</small></p>
            </div>
        @empty
            <p>Belum ada komentar. Jadilah yang pertama untuk memberikan komentar!</p>
        @endforelse
    </div>

    
@endsection
