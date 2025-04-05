@extends('admin.layout.master_layout')

@section('title', 'Add Category')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0"><i class="fas fa-folder-plus"></i> Add Category</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Category List</a></li>
                            <li class="breadcrumb-item active">New Category</li>
                        </ol>
                    </div>
                </div>
            </div>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="section-body">
                <a href="{{ route('categories.index') }}" class="btn btn-primary mb-3"><i class="fas fa-list"></i> Blog Category</a>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('categories.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <!-- Name Field -->
                                        <div class="form-group col-12">
                                            <label>Name <span class="text-danger">*</span></label>
                                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                                                name="name" value="{{ old('name') }}" required>
                                            <div class="invalid-feedback" id="name-error"></div>
                                            @error('name')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Slug Field -->
                                        <div class="form-group col-12">
                                            <label>Slug <span class="text-danger">*</span></label>
                                            <input type="text" id="slug" class="form-control @error('slug') is-invalid @enderror"
                                                name="slug" value="{{ old('slug') }}" required>
                                            @error('slug')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Status Field -->
                                        <div class="form-group col-12">
                                            <label>Status <span class="text-danger">*</span></label>
                                            <select name="status" class="form-control @error('status') is-invalid @enderror">
                                                <option value="" disabled selected>Status</option>
                                                <option value="1" {{ old('status') == "1" ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ old('status') == "0" ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                            @error('status')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="row">
                                        <div class="col-12 mt-4">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let nameField = document.getElementById("name");
        let slugField = document.getElementById("slug");

        if (nameField && slugField) {
            // Auto-generate slug from name input
            nameField.addEventListener("input", function () {
                if (slugField.dataset.autoGenerated !== "false") {
                    let slug = nameField.value
                        .toLowerCase()
                        .trim()
                        .replace(/[^a-z0-9\s-]/g, '')  // Remove special characters
                        .replace(/\s+/g, '-')         // Replace spaces with dashes
                        .replace(/-+/g, '-');         // Remove multiple dashes

                    slugField.value = slug;
                    slugField.dataset.autoGenerated = "true";  // Mark as auto-generated
                }
            });

            // If the user manually edits the slug, stop auto-generating
            slugField.addEventListener("input", function () {
                slugField.dataset.autoGenerated = "false";
            });
        }

        // Debugging: Check if script is loading
        console.log("Slug script loaded successfully!");
    });
</script>
@endpush
