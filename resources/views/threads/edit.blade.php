@extends('layout.threads')

@section('content')
    <h1>Edit Thread</h1>
    
    <form action="{{ route('threads.update', $thread->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" id="title" value="{{ old('title', $thread->title) }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="content">Konten</label>
            <textarea name="content" id="content" class="form-control" required>{{ old('content', $thread->content) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Thread</button>
    </form>
@endsection
