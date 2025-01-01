<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoLAW: Membuka Akses Hukum Tanpa Batas</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/components/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <x-navbar></x-navbar>
    <div class="container">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1528747008803-f9f5cc8f1a64?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1505663912202-ac22d4cb3707?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1528747354767-89476f71d2a3?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>

        <!-- Tagline -->
        <div class="tagline d-flex justify-content-between align-items-center my-5" >
            <div class="tagline-content">
                <h1 class="tagline-title">
                    SOLUTION <br>
                    OF LAW
                </h1>
                <h3 class="tagline-text">Membuka Akses Hukum Tanpa Batas</h3>
                <a href="{{ route('consultant') }}" class="btn btn-primary1 btn-lg">Konsultasi Sekarang</a>
            </div>
            <img src="{{ asset('src/img/vc_law_firm.png') }}" alt="Tagline_Vector" class="tagline-img">
        </div>

        <div class="articles mb-5">
            <h1 class="text-center">Artikel Terbaru</h1>
            <div class="d-flex gap-3 justify-content-center">
                @foreach ($articles as $article)
                    <a href="{{ route('article.detail', $article->id) }}" class="text-decoration-none">
                        <div class="card h-100" style="width: 300px;">
                            <img src="{{ $article->thumbnail_url }}" class="card-img-top" alt="{{ $article->title }}" style="height:200px;">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <div class="card-list">
                                    @foreach ($article->categories as $category)
                                        <span class="card-list-item badge text-bg-secondary p-2">{{ $category->name }}</span>
                                    @endforeach
                                </div> 
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <x-footer></x-footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>