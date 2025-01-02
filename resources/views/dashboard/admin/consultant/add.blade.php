<x-layout-dashboard>
    <x-slot:css>{{ asset('css/dashboard/admin/main.css') }}</x-slot:css>
    <x-slot:nav>Form Add Consultant</x-slot:nav>

    <div class="card border-0 shadow">
        <div class="card-body">
            <form action="{{ route('dashboard.consultants.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="phone_number" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" name="phone_number" id="phone_number" placeholder="Phone Number">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="mb-3">
                    <label for="experience_years" class="form-label">Experience Year</label>
                    <input type="number" class="form-control" name="experience_years" id="experience_years" placeholder="Experience Year">
                </div>
                <div class="mb-3">
                    <label for="about" class="form-label">About</label>
                    <textarea class="form-control" id="about" name="about" placeholder="About" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="profile_photo" class="form-label">Profile Photo</label>
                    <input type="text" class="form-control" name="profile_photo" id="profile_photo" placeholder="Profile Photo">
                </div>
                <div class="mb-3">
                    <label for="education" class="form-label">Education</label>
                    <input type="text" class="form-control" name="education" id="education" placeholder="Education">
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" name="location" id="location" placeholder="Location">
                </div>
                <div class="mb-3">
                    <span class="form-label">Specialities</span>
                    <div class="input-speciality" id="speciality">
                        @foreach ($speciality as $specialties)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="{{ $specialties->id }}" id="speciality-{{ $specialties->id }}" name="specialities[]">
                                <label class="form-check-label" for="speciality-{{ $specialties->id }}">
                                    {{ $specialties->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <button type="button" class="btn btn-link p-0 text-decoration-none" data-bs-toggle="modal" data-bs-target="#addSpecialtiesModal">+ Add Speciality</button>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('dashboard.consultants.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>

    <div class="modal fade" id="addSpecialtiesModal" tabindex="-1" aria-labelledby="addSpecialtiesModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSpecialtiesModalLabel">Add Specialties</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addSpecialtiesForm" action="{{ route('speciality.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Speciality Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Speciality Name">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout-dashboard>