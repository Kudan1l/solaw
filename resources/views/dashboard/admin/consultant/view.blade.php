<x-layout-dashboard>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    <x-slot:css>{{ asset('css/dashboard/admin/main.css') }}</x-slot:css>
    <x-slot:nav>Kelola Konsultant</x-slot:nav>

    <a href="{{ route('dashboard.consultant.add') }}" class="btn btn-primary mb-3">Tambah Konsultant</a>
    <table class="table">
        <thead>
            <tr class="table-primary">
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($consultant as $consultants)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $consultants->name }}</td>
                <td>{{ $consultants->email }}</td>
                <td class="d-flex gap-2">
                    <a href="{{ route('dashboard.consultant.edit',$consultants->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this article?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout-dashboard>