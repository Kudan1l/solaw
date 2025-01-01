<x-layout-dashboard>
    <x-slot:css>{{ asset('css/dashboard/admin/main.css') }}</x-slot:css>
    <x-slot:nav>Form Edit Consultant</x-slot:nav>

    <div class="card border-0 shadow">
        <div class="card-body">
            <form action="{{ route('dashboard.consultant.update',$consultant->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ $consultant->name }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Description</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ $consultant->email }}">
                </div>
                <div class="mb-3">
                    <label for="phone_number" class="form-label">Content</label>
                    <input type="number" class="form-control" name="phone_number" id="phone_number" placeholder="Phone Number" value="{{ $consultant->phone_number }}">
                </div>
                <div class="mb-3">
                    <label for="experience_years" class="form-label">Experience Year</label>
                    <input type="number" class="form-control" name="experience_year" id="experience_years" placeholder="Experience Year" value="{{ $consultant->experience_years }}">
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
                <div class="mb-3">
                    <span class="form-label">Specialities</span>
                    <div class="input-speciality" id="speciality">
                        @foreach ($speciality as $specialties)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="{{ $specialties->id }}" id="speciality-{{ $specialties->id }}" name="specialities[]" {{ in_array($specialties->id, $consultantSpecialties) ? 'checked' : '' }}>
                                <label class="form-check-label" for="speciality-{{ $specialties->id }}">
                                    {{ $specialties->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <button type="button" class="btn btn-link p-0 text-decoration-none" data-bs-toggle="modal" data-bs-target="#addSpecialtiesModal">+ Add Speciality</button>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('dashboard.consultant.index') }}" class="btn btn-secondary">Kembali</a>
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