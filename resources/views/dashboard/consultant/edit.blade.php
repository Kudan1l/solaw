<x-layout-dashboard-consultant>
    <div class="card border-0 shadow">
        <div class="card-body">
            <form action="{{ route('dashboard.consultant.update', $consultant->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ $consultant->name }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ $consultant->email }}">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="mb-3">
                    <label for="phone_number" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" name="phone_number" id="phone_number" placeholder="Phone Number" value="{{ $consultant->phone_number }}">
                </div>
                <div class="mb-3">
                    <label for="experience_years" class="form-label">Experience Year</label>
                    <input type="number" class="form-control" name="experience_years" id="experience_years" placeholder="Experience Year" value="{{ $consultant->experience_years }}">
                </div>
                <div class="mb-3">
                    <label for="about" class="form-label">About</label>
                    <textarea class="form-control" id="about" name="about" placeholder="About" rows="3">{{ $consultant->about }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="profile_photo" class="form-label">Profile Photo</label>
                    <input type="text" class="form-control" name="profile_photo" id="profile_photo" placeholder="Profile Photo" value="{{ $consultant->profile_photo }}">
                </div>
                <div class="mb-3">
                    <label for="education" class="form-label">Education</label>
                    <input type="text" class="form-control" name="education" id="education" placeholder="Education" value="{{ $consultant->education }}">
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" name="location" id="location" placeholder="Location" value="{{ $consultant->location }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('dashboard.consultant.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>

</x-layout-dashboard-consultant>