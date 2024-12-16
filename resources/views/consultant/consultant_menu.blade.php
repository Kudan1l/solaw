<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi Hukum SoLAW: Solusi Hukum yang Tepat, Cepat, dan Terpercaya</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/components/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/consultant/consultant_menu.css')}}">
</head>
<body>
    <x-navbar></x-navbar>
    
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="breadcrumb mt-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                <li class="breadcrumb-item active">Konsultan</li>
            </ol>
        </nav>

        <div class="content mt-3 mb-1">
            <div class="header d-flex justify-content-between align-items-center">
                <h4 class="m-0">Konsultasi dengan konsultan terpercaya</h4>
                <button class="btn btn-primary"><i class="bi bi-sliders2-vertical me-2"></i>Filter</button>
            </div>
            <div class="row align-items-stretch mt-3">
                @foreach ($consultants as $consultant)
                    <!-- Card Konsultan -->
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('consultant.detail', $consultant->id) }}" class="text-decoration-none">
                            <div class="card shadow h-100">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <!-- Foto Profil -->
                                        <img src="{{ $consultant->profile_photo }}" class="card-img rounded" alt="{{ $consultant->name }}" style="width: 100px; height: 100px; object-fit: cover;">

                                        <div class="ms-3 d-flex flex-column justify-content-center">
                                            <!-- Nama Konsultan -->
                                            <h4 class="m-0">{{ $consultant->name }}</h4>

                                            <!-- Rating Konsultan -->
                                            <div class="d-flex rating">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                                <span class="ms-2"><strong>4.76 dari 5</strong> (234)</span> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-detail d-flex flex-column mt-2">
                                        <!-- Deskripsi Bidang Keahlian -->
                                        <span class="text-muted">Bidang keahlian dan spesialisasi</span>
                                        <div class="d-flex flex-wrap">
                                            <span class="mb-3">{{ $consultant->specialties->pluck('name')->implode(', ') }}</span>
                                        </div>

                                        <div class="card-experience">
                                            <!-- Pengalaman -->
                                            <div class="experience-years d-flex align-items-center">
                                                <i class="bi bi-briefcase-fill me-2"></i>
                                                <span>Lebih dari {{ $consultant->experience_years }} Tahun</span>
                                            </div>

                                            <!-- Pendidikan -->
                                            <div class="education d-flex align-items-center mt-2">
                                                <i class="bi bi-mortarboard-fill me-2"></i>
                                                <span>{{ $consultant->education }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

    <x-footer></x-footer>
</body>
</html>