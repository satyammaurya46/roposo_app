@extends('admin.layout.master_layout')
@section('title', 'Blog Create')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Blog Create</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Editable Tables</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            {{-- <h4 class="header-title">Validation with Parsley.js</h4> --}}
                            {{-- <p class="card-title-desc">Parsley.js is a JavaScript form validation library that helps provide
                                users with instant feedback on their form submission before sending it to the server.</p> --}}
                                <form action="{{route('blogCreate.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                
                                    <!-- Blog Title -->
                                    <div class="mb-3">
                                        <label for="title">Blog Title <span class="text-danger">*</span></label>
                                        <input type="text" id="title" name="title" class="form-control" placeholder="Enter Blog Title" maxlength="255" required>
                                    </div>
                                
                                    <!-- Blog Content -->
                                    <div class="mb-3">
                                        <label for="content">Blog Content <span class="text-danger">*</span></label>
                                        <textarea id="content" name="content" class="form-control rich-editor" placeholder="Enter Blog Content" maxlength="10000" required></textarea>
                                    </div>
                                
                                    <!-- Featured Image -->
                                    <div class="mb-3">
                                        <label for="featured_image">Featured Image</label>
                                        <input type="file" id="featured_image" name="featured_image" class="form-control" accept="image/jpeg,image/png,image/gif">
                                        <small class="text-muted">Max size: 5MB</small>
                                    </div>
                                
                                    <!-- Category Dropdown -->
                                    <div class="mb-3">
                                        <label for="category">Category <span class="text-danger">*</span></label>
                                        <select name="category" id="category" class="form-control" required>
                                            <option value="">Select Category</option>
                                           
                                                <option value=""></option>
                                           
                                        </select>
                                    </div>
                                
                                    <!-- Tags Input -->
                                    <div class="mb-3">
                                        <label for="tags">Tags</label>
                                        <input type="text" id="tags" name="tags" class="form-control" placeholder="Enter tags" maxlength="100">
                                        <small class="text-muted">Separate tags with commas</small>
                                    </div>
                                
                                    <!-- Publish Date -->
                                    <div class="mb-3">
                                        <label for="publish_date">Publish Date <span class="text-danger">*</span></label>
                                        <input type="date" id="publish_date" name="publish_date" class="form-control" value="{{ date('Y-m-d') }}" required>
                                    </div>
                                
                                    <!-- Status Radio Buttons -->
                                    <div class="mb-3">
                                        <label>Status <span class="text-danger">*</span></label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="published" value="Published" required>
                                            <label class="form-check-label" for="published">Published</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="draft" value="Draft">
                                            <label class="form-check-label" for="draft">Draft</label>
                                        </div>
                                    </div>
                                
                                    <!-- URL Slug -->
                                    <div class="mb-3">
                                        <label for="slug">URL Slug <span class="text-danger">*</span></label>
                                        <input type="text" id="slug" name="slug" class="form-control" placeholder="Enter unique slug" required>
                                    </div>
                                
                                    <!-- SEO Title -->
                                    <div class="mb-3">
                                        <label for="seo_title">SEO Title</label>
                                        <input type="text" id="seo_title" name="seo_title" class="form-control" placeholder="Enter SEO Title" maxlength="70">
                                    </div>
                                
                                    <!-- SEO Description -->
                                    <div class="mb-3">
                                        <label for="seo_description">SEO Description</label>
                                        <textarea id="seo_description" name="seo_description" class="form-control" placeholder="Enter SEO Description" maxlength="160"></textarea>
                                    </div>
                                
                                    <!-- Author Name -->
                                    <div class="mb-3">
                                        <label for="author_id">Author Name <span class="text-danger">*</span></label>
                                        <select id="author_id" name="author_id" class="form-control" required>
                                            <option value="">Select Author</option>
                                           
                                                <option value="" >
                                                    
                                                </option>
                                            
                                        </select>
                                    </div>
                                
                                    <!-- Excerpt -->
                                    <div class="mb-3">
                                        <label for="excerpt">Excerpt</label>
                                        <textarea id="excerpt" name="excerpt" class="form-control" placeholder="Enter Blog Excerpt" maxlength="255"></textarea>
                                    </div>
                                
                                    <!-- Submit Button -->
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<!-- Rich Text Editor Script (Example: TinyMCE or CKEditor) -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea.rich-editor',
        height: 300,
        menubar: false,
        plugins: 'link image lists code',
        toolbar: 'undo redo | bold italic underline | bullist numlist | link image | code'
    });
</script> 
@endsection
