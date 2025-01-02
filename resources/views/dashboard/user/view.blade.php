<x-layout-dashboard-user>
    <div class="card">
        <img src="" alt="">
        <div class="card-body">
            <h1 class="card-title">{{ $user->name }}</h1>
            <div class="mb-3 d-flex flex-column">
                <span>Email</span>
                <h3>{{ $user->email }}</h3>
            </div>
        </div>
    </div>
</x-layout-dashboard-user>