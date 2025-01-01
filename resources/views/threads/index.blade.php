@extends('layout.threads')


@section('sidebar')
    <h1><a href="/threads" class="text-decoration-none">Forum Diskusi</a></h1>
    <form action="{{ route('threads.search') }}" method="POST" class="form-thread">
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
        
        <section class="container py-3" style="max-height: 590px; overflow-y: auto;">

        @foreach ($threads as $thread)
        <div class="thread-card">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('src/img/avatar.jpg') }}" alt="Avatar Default" width="30" height="30" class="rounded-circle mr-2">
                    <div>
                        <p style="font-size: 0.85rem; margin-bottom: 0;">
                            <strong>{{ $thread->user->name ?? 'Anonim' }}</strong>
                        </p>
                        <p class="text-muted" style="font-size: 0.75rem; margin-top: 0;">
                            Diposting pada: <strong>{{ $thread->created_at->format('d M Y, H:i') }}</strong>
                        </p>
                    </div>
                </div>

                @if (Auth::id() == $thread->user_id || Auth::user()->role == 'admin')
                    <div>
                        <a href="{{ route('threads.edit', $thread->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        
                        <form action="{{ route('threads.destroy', $thread->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus thread ini?')">Hapus</button>
                        </form>
                    </div>
                @endif
            </div>

            <h3>
                <a href="{{ route('threads.show', $thread->id) }}" class="konten text-decoration-none">
                    {{ $thread->title }}
                </a>
            </h3>
            <p>{{ \Illuminate\Support\Str::limit($thread->content, 150, '...') }}</p>
        </div>
        @endforeach
       
        </section>
    </section>
@endsection

