<x-layout-dashboard>
    <x-slot:css>{{ asset('css/dashboard/admin/main.css') }}</x-slot:css>
    <x-slot:nav>Form Add Artikel</x-slot:nav>

    <div class="card border-0 shadow">
        <div class="card-body">
            <form action="{{ route('dashboard.article.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" name="content" id="content" rows="3" placeholder="Content"></textarea>
                </div>
                <div class="mb-3">
                    <label for="thumbnail" class="form-label">Thumbnail URL</label>
                    <input type="text" class="form-control" name="thumbnail_url" id="thumbnail" placeholder="URL">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status">
                        <option value="draft" selected>Draft</option>
                        <option value="publish">Publish</option>
                    </select>
                </div>
                <div class="mb-3">
                    <span class="form-label">Category</span>
                    <div class="input-category" id="category">
                        @foreach ($category as $categories)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="{{ $categories->id }}" id="category-{{ $categories->id }}" name="categories[]">
                                <label class="form-check-label" for="category-{{ $categories->id }}">
                                    {{ $categories->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <button type="button" class="btn btn-link p-0 text-decoration-none" data-bs-toggle="modal" data-bs-target="#addCategoryModal">+ Add Category</button>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('dashboard.article.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>

    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoryModalLabel">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addCategoryForm" action="{{ route('categories.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Category Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Category Name">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout-dashboard>