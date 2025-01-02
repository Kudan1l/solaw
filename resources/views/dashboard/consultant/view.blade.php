<x-layout-dashboard-consultant>
    <div class="card d-flex flex-row">
        <img src="{{ $consultant->profile_photo }}" alt="{{ $consultant->name }}" class="img-fluid rounded shadow" style="width: 250px; height: 250px; object-fit: cover;">
        <div class="card-body">
            <h1 class="card-title">Profile Account</h1>
            <div class="mb-3 d-flex flex-column">
                <span>Name</span>
                <h3>{{ $consultant->name }}</h3>
            </div>
            <div class="mb-3 d-flex flex-column">
                <span>Email</span>
                <h3>{{ $consultant->email }}</h3>
            </div>
            <div class="mb-3 d-flex flex-column">
                <span>About</span>
                <p><strong>{{ $consultant->about }}</strong></p>
            </div>
            <div class="mb-3 d-flex flex-column">
                <span>Education</span>
                <p><strong>{{ $consultant->education }}</strong></p>
            </div>
            <div class="mb-3 d-flex flex-column">
                <span>Location</span>
                <p><strong>{{ $consultant->location }}</strong></p>
            </div>
            <a href="{{ route('dashboard.consultant.edit', $consultant->id) }}" class="btn btn-primary">Edit Profile</a>
        </div>
    </div>
</x-layout-dashboard-consultant>