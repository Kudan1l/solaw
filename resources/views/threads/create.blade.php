@extends('layout.threads')


@section('sidebar')
<h1><a href="/threads" class="text-decoration-none">Forum Diskusi</a></h1>
@endsection


@section('content')
    <div class="container">
        
        <form action="{{ route('threads.store') }}" method="POST" class="form-thread">
            @csrf
            <div class="form-group">
            <h1>Buat Thread Baru</h1>
                <label for="title">Judul Thread</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="content">Konten Thread</label>
                <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="thread">Buat Thread</button>
        </form>
    </div>
@endsection
