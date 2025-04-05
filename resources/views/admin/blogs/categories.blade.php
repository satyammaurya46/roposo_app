@extends('admin.layout.master_layout')

@section('title', 'Categories')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page Title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0"><i class="fas fa-folder"></i> Categories</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Category List</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Success Message -->
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="section-body">
                <!-- Add New Button -->
                <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">
                    <i class="fas fa-plus"></i> Add New
                </a>

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Slug</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $index => $category)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $category->name }}</td>
                                                    <td>{{ $category->slug }}</td>
                                                    <td>
                                                        <button class="btn btn-sm toggle-status {{ $category->status ? 'btn-success' : 'btn-danger' }}"
                                                            data-id="{{ $category->id }}">
                                                            {{ $category->status ? 'Active' : 'Inactive' }}
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>

                                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                <i class="fas fa-trash"></i> Delete
                                                            </button>
                                                        </form>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
{{-- <script>
    $(document).ready(function () {
        $('#dataTable').DataTable();
    });

</script> --}}
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable();

        $('.toggle-status').click(function () {
            let button = $(this);
            let categoryId = button.data('id');

            $.ajax({
                url: "{{ route('blogCategories.toggleStatus') }}", // Corrected route name
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: categoryId
                },
                success: function (response) {
                    if (response.status) {
                        button.removeClass('btn-danger').addClass('btn-success').text('Active');
                    } else {
                        button.removeClass('btn-success').addClass('btn-danger').text('Inactive');
                    }
                },
                error: function () {
                    alert('Something went wrong!');
                }
            });
        });
    });
</script>




@endpush
