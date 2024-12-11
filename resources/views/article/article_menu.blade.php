<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('css/components/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/article/article_menu.css') }}">
</head>
<body>
    <x-navbar></x-navbar>
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="breadcrumb mt-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                <li class="breadcrumb-item active">Artikel</li>
            </ol>
        </nav>

        <div class="main d-flex gap-5 justify-content-between mt-3 mb-5">
            <div class="main-article w-100">
                <div class="article-lists d-flex flex-column gap-1">
                @foreach ($articles as $article)
                    <a href="{{ route('article.detail', $article->id) }}" class="text-decoration-none">
                        <div class="card d-flex flex-row card-{{$article->id}}">
                            <img src="{{ $article->thumbnail_url }}" alt="" class="card-img">
                            <div class="card-body">
                                <h4 class="card-title"> {{ $article->title }} </h4>
                                <p class="card-text" style="text-align: justify;"> {{ $article->description }} </p>
                            </div>
                        </div>
                    </a>
                @endforeach
                </div>
            </div>
            <div class="main-category">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Kategori Artikel</h4>
                        <form action="{{ route('article') }}" method="GET">
                            @foreach ($categories as $category)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="category_{{ $category->name }}" name="categories[]" @if(in_array($category->id, request()->input('categories', []))) checked @endif>
                                    <label class="form-check-label" for="category_{{ $category->name }}">
                                        {{ $category->name }}
                                    </label>
                                </div>
                            @endforeach
                            <button type="submit" class="btn btn-primary mt-2">Filter Artikel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>
</html>