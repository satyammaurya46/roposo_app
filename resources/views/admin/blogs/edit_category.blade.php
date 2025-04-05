@extends('admin.layout.master_layout')

@section('title', 'Edit Category')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h4>Edit Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" 
                        value="{{ old('name', $category->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="slug">Slug</label>
                    <input type="text" id="slug" name="slug" class="form-control" 
                        value="{{ old('slug', $category->slug) }}" required>
                </div>

                <div class="mb-3">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Update Category</button>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const nameInput = document.getElementById("name");
        const slugInput = document.getElementById("slug");

        nameInput.addEventListener("keyup", function() {
            let slug = nameInput.value
                .toLowerCase() // Convert to lowercase
                .trim() // Trim whitespace
                .replace(/[^a-z0-9\s-]/g, "") // Remove special characters
                .replace(/\s+/g, "-") // Replace spaces with hyphens
                .replace(/-+/g, "-"); // Remove multiple hyphens

            slugInput.value = slug;
        });
    });
</script>
@endpush
