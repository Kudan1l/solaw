<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $articles->title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('css/components/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/article/article_detail.css') }}">
</head>
<body>
    <x-navbar></x-navbar>    

    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="breadcrumb mt-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ route('article') }}">Artikel</a></li>
                <li class="breadcrumb-item active">{{ $articles->title }}</li>
            </ol>
        </nav>
        <div class="card content my-3">
            <div class="card-body">
                <p class="m-0 card-date" style="text-align: right;">Published on {{ $articles->created_at->format('d F Y') }}</p>
                <h1 class="card-title">{{$articles->title}}</h1>
                <div class="categories mb-3">
                    @foreach ($articles->categories as $category)
                        <span class="badge bg-primary">{{ $category->name }}</span>
                    @endforeach
                </div>
                <p class="card-text" style="text-align: justify;">
                    {{$articles->content}}
                </p>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
</body>
</html>