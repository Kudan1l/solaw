<x-layout-dashboard>
    <x-slot:css>{{ asset('css/dashboard/admin/view.css') }}</x-slot:css>
    <x-slot:nav>Dashboard</x-slot:nav>

    <div class="information">
        <div class="artikel d-flex g-3 justify-content-between mb-3">
            <div class="card">
                <div class="card-body d-flex align-items-center gap-3 shadow">
                    <i class="bi bi-journals fs-2"></i>
                    <div class="detail-text d-flex flex-column">
                        <h5 class="m-0">Total</h5>
                        <span>Artikel</span>
                    </div>
                    <h4 class="ms-auto">{{ $totalArticle }}</h4>
                </div>
            </div>
            <div class="card">
                <div class="card-body d-flex align-items-center gap-3 shadow">
                    <i class="bi bi-journal-check fs-2"></i>
                    <div class="detail-text d-flex flex-column">
                        <h5 class="m-0">Publish</h5>
                        <span>Artikel</span>
                    </div>
                    <h4 class="ms-auto">{{ $publishedCount }}</h4>
                </div>
            </div>
            <div class="card">
                <div class="card-body d-flex align-items-center gap-3 shadow">
                    <i class="bi bi-journal-medical fs-2"></i>
                    <div class="detail-text d-flex flex-column">
                        <h5 class="m-0">Draft</h5>
                        <span>Artikel</span>
                    </div>
                    <h4 class="ms-auto">{{ $draftCount }}</h4>
                </div>
            </div>
        </div>
        <div class="konsultan d-flex g-3 justify-content-between mb-3">
            <div class="card">
                <div class="card-body d-flex align-items-center gap-3 shadow">
                    <i class="bi bi-person fs-2"></i>
                    <div class="detail-text d-flex flex-column">
                        <h5 class="m-0">Total</h5>
                        <span>Konsultan</span>
                    </div>
                    <h4 class="ms-auto">{{ $totalConsultant }}</h4>
                </div>
            </div>
            <!-- <div class="card">
                <div class="card-body d-flex align-items-center gap-3 shadow">
                    <i class="bi bi-person-up fs-2"></i>
                    <div class="detail-text d-flex flex-column">
                        <h5 class="m-0">Aktif</h5>
                        <span>Konsultan</span>
                    </div>
                    <h4 class="ms-auto">7</h4>
                </div>
            </div> -->
            <!-- <div class="card">
                <div class="card-body d-flex align-items-center gap-3 shadow">
                    <i class="bi bi-person-down fs-2"></i>
                    <div class="detail-text d-flex flex-column">
                        <h5 class="m-0">Non Aktif</h5>
                        <span>Konsultan</span>
                    </div>
                    <h4 class="ms-auto">7</h4>
                </div>
            </div> -->
        </div>
        <div class="peson d-flex g-3 justify-content-between mb-3">
            <div class="card">
                <div class="card-body d-flex align-items-center gap-3 shadow">
                    <i class="bi bi-people fs-2"></i>
                    <div class="detail-text d-flex flex-column">
                        <h5 class="m-0">Total</h5>
                        <span>Pengguna</span>
                    </div>
                    <h4 class="ms-auto">{{ $totalUser }}</h4>
                </div>
            </div>
            <!-- <div class="card">
                <div class="card-body d-flex align-items-center gap-3 shadow">
                    <i class="bi bi-person-check fs-2"></i>
                    <div class="detail-text d-flex flex-column">
                        <h5 class="m-0">Aktif</h5>
                        <span>Pengguna</span>
                    </div>
                    <h4 class="ms-auto">7</h4>
                </div>
            </div> -->
            <!-- <div class="card">
                <div class="card-body d-flex align-items-center gap-3 shadow">
                    <i class="bi bi-person-add fs-2"></i>
                    <div class="detail-text d-flex flex-column">
                        <h5 class="m-0">Baru</h5>
                        <span>Pengguna</span>
                    </div>
                    <h4 class="ms-auto">7</h4>
                </div>
            </div> -->
        </div>
    </div>
</x-layout-dashboard>