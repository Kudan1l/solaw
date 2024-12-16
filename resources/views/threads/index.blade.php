@extends('layout.threads')

@section('sidebar')
    <h1 style="">Forum Diskusi</h1>
    
    <!-- Form Search -->
    <form action="{{ route('threads.search') }}" method="POST">
    @csrf
    <input 
        type="text" 
        name="query" 
        class="form-control mb-2" 
        placeholder="Cari Thread..." 
        required 
    />
    <button type="submit" class="btn btn-search">Cari</button>
</form>

    <a href="{{ route('threads.create') }}" class="thread">Buat Thread Baru</a>
@endsection

@section('content')
    <section class="container mt-4">
        @if (isset($query))
            <h2 class="text-center">Hasil Pencarian untuk "{{ $query }}"</h2>
        @endif

        @foreach ($threads as $thread)
    <div class="thread-card">
        <h3>
            <a href="{{ route('threads.show', $thread->id) }}" class="konten text-decoration-none ">
                {{ $thread->title }}
            </a>
        </h3>
        <p>{{ \Illuminate\Support\Str::limit($thread->content, 150, '...') }}</p>
        <p><strong>Diposting pada:</strong> {{ $thread->created_at->format('d M Y, H:i') }}</p>
    </div>
@endforeach

    </section>
@endsection
