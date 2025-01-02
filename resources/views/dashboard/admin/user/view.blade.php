<x-layout-dashboard>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    <x-slot:css>{{ asset('css/dashboard/admin/main.css') }}</x-slot:css>
    <x-slot:nav>Kelola Pengguna</x-slot:nav>

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
            @foreach ($user as $users)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $users->name }}</td>
                <td>{{ $users->email }}</td>
                <td>
                    <form action="{{ route('dashboard.users.destroy', $users->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this article?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout-dashboard>