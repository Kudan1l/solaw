<x-layout-dashboard>
    <x-slot:css>{{ asset('css/dashboard/admin/main.css') }}</x-slot:css>
    <x-slot:nav>Form Edit Admin</x-slot:nav>

    <div class="card border-0 shadow">
        <div class="card-body">
            <form action="{{ route('dashboard.admin.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ $user->name }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ $user->email }}">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('dashboard.admin.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</x-layout-dashboard>