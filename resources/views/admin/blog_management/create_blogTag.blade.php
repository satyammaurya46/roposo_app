@extends('admin.layout.master_layout')
@section('title', 'Create Blog')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">{{ empty($blog) ? 'Create' : 'Update' }} Blog Tag</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Blog Management</a></li>
                                <li class="breadcrumb-item active">Form Validation</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <form class="custom-validation" action="{{ empty($blog) ? route('store.blog') : route('update.blog', $blog->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if (!empty($blog))
                                    @method('PUT')
                                @endif

                                <div class="mb-3">
                                    <label>Tag Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" id="name" required
                                        minlength="3" maxlength="50" placeholder="Enter tag name" value="{{ old('name', $blog->name ?? '') }}" />
                                    <small id="name_error" class="text-danger d-none">Tag name already exists.</small>
                                </div>

                                <div class="mb-3">
                                    <label>Tag Slug<span class="text-danger">*</span></label>
                                    <input type="text" id="slug" name="slug" class="form-control mt-2" readonly
                                        placeholder="Enter Tag Slug" value="{{ old('slug', $blog->slug ?? '') }}">
                                    <small id="slug_error" class="text-danger d-none">Slug already exists.</small>
                                </div>

                                <div class="mb-3">
                                    <label>Tag Description (Optional)</label>
                                    <textarea class="form-control" rows="5" name="description" id="description"
                                        placeholder="Enter tag description" maxlength="255">{{ old('description', $blog->description ?? '') }}</textarea>
                                </div>

                                <div class="mb-0 text-end">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                        {{ isset($blog) ? 'Update' : 'Add' }}
                                    </button>
                                    @if(isset($blog))
                                       <a href="{{ route('list.blog') }}" class="btn btn-warning waves-effect">
                                          Cancel
                                       </a>
                                    @else
                                       <button type="reset" class="btn btn-warning waves-effect">
                                         Clear
                                       </button>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function generateSlug(str) {
            return str.toLowerCase()
                .replace(/ /g, '-')
                .replace(/[^\w-]+/g, '');
        }

        $(document).ready(function() {
            $('#name').on('keyup', function() {
                let name = $(this).val();
                let slugField = $('#slug');
                let nameError = $('#name_error');
                let slugError = $('#slug_error');

                if (name.length > 0) {
                    let slug = generateSlug(name);
                    slugField.val(slug);

                    // Check if the tag name is unique
                    $.ajax({
                        url: "{{ route('check.name.exists') }}",
                        type: "POST",
                        data: {
                            name: name,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            response.exists ? nameError.removeClass('d-none') : nameError.addClass('d-none');
                        }
                    });

                    // Check if the slug is unique
                    $.ajax({
                        url: "{{ route('check.slug.exists') }}",
                        type: "POST",
                        data: {
                            slug: slug,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            response.exists ? slugError.removeClass('d-none') : slugError.addClass('d-none');
                        }
                    });
                } else {
                    nameError.addClass('d-none');
                    slugError.addClass('d-none');
                    slugField.val('');
                }
            });
        });
    </script>
@endsection
