<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOLAW</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin /> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Lexend:wght@100..900&display=swap" rel="stylesheet" /> -->
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
            <button class="carousel-control-prev" type="button" data-bs-target="#ccarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Tagline -->
        <div class="tagline d-flex justify-content-between align-items-center my-5">
            <div class="tagline-content">
                <h1 class="tagline-title">
                    SOLUTION <br>
                    OF LAW
                </h1>
                <h3 class="talint-text">Membuka Akses Hukum Tanpa Batas</h3>
                <a href="" class="btn btn-primary btn-lg">Konsultasi Sekarang</a>
            </div>
            <img src="{{ asset('src/img/vc_law_firm.png') }}" alt="" class="tagline-img">
        </div>

        <!-- Article -->
        <div class="articels mb-5">
            <h1>Artikel</h1>
            <div class="d-flex gap-3">
                @foreach ($articles as $article)
                    <div class="card w-100">
                        <img src="{{ $article->thumbnail_url }}" alt="" class="img-fluid card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">
                                {{ $article->title }}
                            </h3>
                            <ul class="list-group list-group-horizontal gap-3 mb-2">
                                <!-- Kategori akan ditambahkan di sini -->
                                @foreach ($article->categories as $category)
                                    <li class="list-group-item badge text-bg-secondary" style="border: none; color: #fff !important; ">{{ $category->name }}</li>
                                @endforeach
                            </ul>
                            <p class="card-text" style="text-align: justify;">{{ $article->description }}</p>
                            <a href="Artikel_konten_page.html?" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            </div> 
        </div>
    </div>

    <x-footer></x-footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>