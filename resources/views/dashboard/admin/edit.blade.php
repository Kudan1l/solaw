<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel Edit</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/dashboard/form.css') }}">
</head>
<body>
    <div class="container">
        <div class="card border-0 w-100 shadow">
            <div class="card-body">
                <h1 class="card-brand">SoLAW</h1>
                <h1 class="card-title text-center">Edit Konten Artikel</h1>
                <form action="{{ route('admin.article.update', $article->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input class="form-control" type="text" id="title" name="title" value="{{$article->title}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" placeholder="{{$article->description}}" style="width: 100%; height: 150px;" required>{{$article->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea class="form-control w-100" name="content" id="content" placeholder="{{$article->content}}" style="width: 100%; height: 150px;" required >{{$article->content}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="thumbnail_url" class="form-label">Thumbnail</label>
                        <input class="form-control" type="text" id="thumbnail_url" name="thumbnail_url" value="{{$article->thumbnail_url}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" aria-label="status" name="category">
                            <option value="" selected>-- Pilih Kategori --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->name }}">{{ ucfirst($category->name) }}</option>            
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" aria-label="status" name="status">
                            <option value="draft" {{ $article->status == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="publish" {{ $article->status == 'publish' ? 'selected' : '' }}>Publish</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('dashboard.admin') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>