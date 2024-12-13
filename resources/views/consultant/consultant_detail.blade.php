<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $consultants->name }} - SoLAW</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/components/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/consultant/consultant_detail.css') }}">
</head>
<body>
    <x-navbar></x-navbar>
    
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="breadcrumb mt-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ route('consultant') }}">Konsultan</a></li>
                <li class="breadcrumb-item active">{{ $consultants->name }}</li>
            </ol>
        </nav>

        <div class="content mt-3">
            <h2 class="text-center mb-3">Profil Konsultan Hukum</h2>
            <div class="card shadow mb-3 mx-md-auto w-50">
                <div class="card-body">
                    <div class="d-flex">
                        <img src="{{ $consultants->profile_photo }}" alt="alt={{ $consultants->name }}" class="card-img rounded shadow" style="width: 120px; height: 120px; object-fit: cover;">
                        <div class="ms-3 d-flex flex-column justify-content-center">
                            <!-- Nama Konsultan -->
                            <h1 class="m-0">{{ $consultants->name }}</h1>

                            <!-- Rating Konsultan -->
                            <div class="card-rating d-flex">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span class="ms-2"><strong>4.76 dari 5</strong> (234)</span> 
                            </div>
                        </div>
                    </div>
                    <div class="card-detail d-flex flex-row gap-5 border-bottom py-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-geo-alt-fill me-3 fs-4"></i>
                            <div class="d-flex flex-column fs-6">
                                <span><strong>Lokasi</strong></span>
                                <span>{{ $consultants->location  }}</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-calendar-event  me-3 fs-4"></i>
                            <div class="d-flex flex-column fs-6">
                                <span><strong>Bergabung Sejak</strong></span>
                                <span>{{ $consultants->created_at->translatedFormat('F Y') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="card-description d-flex flex-column border-bottom py-3">
                        <div class="d-flex flex-column">
                            <span class="fs-5"><strong>Bidang Keahlian dan Spesialisasi</strong></span>
                            <div class="d-flex flex-wrap">
                                <span class="mt-2">{{ $consultants->specialties->pluck('name')->implode(', ') }}</span>
                            </div>
                        </div>
                        <div class="d-flex flex-column mt-4">
                            <span class="fs-5"><strong>Tentang Konsultan Hukum</strong></span>
                            <p class="card-text mt-2" style="text-align: justify;">
                                {{ $consultants->about }}
                            </p>
                        </div>
                    </div>

                    <div class="card-experience d-flex flex-column mt-3">
                        <span class="fs-5"><strong>Pendidikan dan Pengalaman</strong></span>
                        <div class="d-flex flex-column">
                            <div class="experience-years d-flex align-items-center mt-2">
                                <i class="bi bi-briefcase-fill me-3 fs-5"></i>
                                <span>Lebih dari {{ $consultants->experience_years }} Tahun</span>
                            </div>
                            <div class="education d-flex align-items-center mt-2">
                                <i class="bi bi-mortarboard-fill me-3 fs-5"></i>
                                <span>{{ $consultants->education }}</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <x-footer></x-footer>
</body>
</html>