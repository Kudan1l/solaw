<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/dashboard/admin.css') }}">

</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="sidebar p-3">
            <h1 class="text-center brand">SoLAW</h1>
            <div class="main-menu mt-5">
                <nav id="myTab" role="tablist">
                    <h6 class="mb-3">Main Menu</h6>
                    <div class="nav-item mb-3" role="presentation">
                        <button class="btn btn-nav w-100 text-start" type="button" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#contentDashboard" aria-selected="false" aria-controls="contentDashboard" onclick="setActiveTab('dashboard')" role="tab">
                            <i class="bi bi-house-door"></i>
                            <span>Dashboard</span>
                        </button>
                    </div>
                    <div class="nav-item mb-3" role="presentation">
                        <button class="btn btn-nav w-100 text-start" type="button" id="article-tab" data-bs-toggle="tab" data-bs-target="#contentArticle" aria-selected="false" aria-controls="contentArticle"  onclick="setActiveTab('article')" role="tab">
                            <i class="bi bi-file-earmark-text"></i>
                            <span>Artikel</span>
                        </button>
                    </div>
                    <div class="nav-item mb-3" role="presentation">
                        <button class="btn btn-nav w-100 text-start" type="button" id="consultant-tab" data-bs-toggle="tab" data-bs-target="#contentConsultant" aria-selected="false" aria-controls="contentConsultant"  onclick="setActiveTab('consultant')" role="tab">
                            <i class="bi bi-people-fill"></i>
                            <span>Konsultan</span>
                        </button>
                    </div>
                </nav>
            </div>

            <div class="nav-footer mt-auto">
                <a href="{{ route('home') }}" class="btn btn-light w-100 mb-3">Beranda</a>
                <form action="{{ route('logout') }}" method='POST'>
                    @csrf
                    <button type='submit' class="btn btn-danger w-100">Logout</button>
                </form>
            </div> 
        </nav>

        <!-- Main Content -->
        <div class="content m-4 w-100" >
            <div class="tab-content">
                <!-- Dashboard Tab -->
                <div class="tab-pane" id="contentDashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <div class="content-title">
                        <h2>Welcome to Dashboard {{ Auth::user()->name }}</h2>
                        <p>Your management panel for SoLAW</p>

                        <div class="information-list row column-gap-2" style="flex-wrap: 1;">
                            <div class="card border-0 shadow col-3 px-0">
                                <div class="card-body d-flex gap-3 align-items-center">
                                    <i class="bi bi-journal-check fs-2"></i>
                                    <div class="card-detail">
                                        <h4 class="card-title">Artikel</h4>
                                        <h6>{{ $publishedCount }} Published</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 shadow col-3 px-0">
                                <div class="card-body d-flex gap-3 align-items-center">
                                    <i class="bi bi-journal-bookmark fs-2"></i>
                                    <div class="card-detail">
                                        <h4 class="card-title">Artikel</h4>
                                        <h6>{{ $draftCount }} Draft</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 shadow col-3 px-0">
                                <div class="card-body d-flex gap-3 align-items-center">
                                    <i class="bi bi-person-lines-fill fs-2"></i>
                                    <div class="card-detail">
                                        <h4 class="card-title">Konsultan</h4>
                                        <h6>on progres</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Artikel Tab -->
                <div class="tab-pane" id="contentArticle" role="tabpanel" aria-labelledby="article-tab">
                    <div class="content-title">
                        <h2>Artikel</h2>
                        <p>Your management panel for SoLAW</p>
                    </div>
                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ route('admin.article.create') }}" class="btn btn-primary">Tambah Artikel</a>
                    </div>
                    <table class="table shadow">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $index => $article)
                            <tr data-id="{{ $article->id }}">
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $article->title}}</td>
                                <td>
                                    @if($article->status == 'publish')
                                        <span class="badge text-bg-success">{{ ucwords($article->status) }}</span>
                                    @elseif($article->status == 'draft')
                                        <span class="badge text-bg-secondary">{{ ucwords($article->status) }}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.article.edit', $article->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.article.delete', $article->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE') <!-- Method spoofing untuk DELETE -->
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>

                <div class="tab-pane" id="contentConsultant" role="tabpanel" aria-labelledby="consultant-tab">
                    <div class="content-title">
                        <h2>Konsultan</h2>
                        <p>Your management panel for SoLAW</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        // Dapatkan tab yang aktif dari server-side
        const activeTab = "{{ $activeTab }}";

        // Atur tab yang aktif berdasarkan data dari server
        document.querySelector(`#${activeTab}-tab`).classList.add('active');
        document.querySelector(`#content${activeTab.charAt(0).toUpperCase() + activeTab.slice(1)}`).classList.add('show', 'active');
        function setActiveTab(tab) {
            const url = new URL(window.location.href);
            url.searchParams.set('tab', tab);
            window.location.href = url.toString();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>
