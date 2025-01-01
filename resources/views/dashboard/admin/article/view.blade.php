<x-layout-dashboard>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    <x-slot:css>{{ asset('css/dashboard/admin/main.css') }}</x-slot:css>
    <x-slot:nav>Kelola Artikel</x-slot:nav>

    <a href="{{ route('dashboard.article.add') }}" class="btn btn-primary mb-3">Tambah Artikel</a>
    <table class="table">
        <thead>
            <tr class="table-primary">
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $article->title }}</td>
                <td>
                    @if($article->status == 'draft')
                        <span class="badge bg-secondary">Draft</span>
                    @elseif($article->status == 'publish')
                        <span class
                        ="badge bg-success">Publish</span>
                    @endif
                </td>
                <td class="d-flex gap-2">
                    <a href="{{ route('dashboard.article.edit', $article->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('dashboard.article.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this article?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout-dashboard>