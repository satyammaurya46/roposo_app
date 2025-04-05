@extends('admin.layout.master_layout')
@section('title', 'Blog List')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Blog List</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Editable Tables</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Search Box -->
                            <div class="d-flex justify-content-end mb-3">
                                <input type="text" id="search" class="form-control me-2" placeholder="Search" style="width: 200px;">
                                <a href="{{ route('create.blog') }}" class="btn btn-primary">
                                    <i class="fa fa-plus"></i> Add
                                </a>
                            </div>
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert"
                                    id="success-alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>

                                <script>
                                    // Auto close after 3 seconds (3000 milliseconds)
                                    setTimeout(function() {
                                        let alertBox = document.getElementById("success-alert");
                                        if (alertBox) {
                                            alertBox.style.transition = "opacity 0.5s";
                                            alertBox.style.opacity = "0";
                                            setTimeout(() => alertBox.remove(), 500); // Remove element after fade out
                                        }
                                    }, 3000);
                                </script>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-editable table-nowrap align-middle table-edits" id="blogTable">
                                    <thead>
                                        <tr style="cursor: pointer;">
                                            <th>No.Of Blog</th>
                                            <th>Tag Name</th>
                                            <th>Tag Slug</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blog as $index => $row)
                                            <tr data-id="1" style="cursor: pointer;">
                                                <td data-field="id" style="width: 80px">{{ ++$index }}</td>
                                                <td data-field="name">{{ $row->name }}</td>
                                                <td data-field="slug">{{ $row->slug }}</td>
                                                <td data-field="description">{{ $row->description }}</td>
                                                <td style="width: 100px">
                                                     <!-- View Button -->
                                                     <button class="btn btn-primary btn-sm viewBtn" 
                                                     data-id="{{ $row->id }}" 
                                                     data-name="{{ $row->name }}" 
                                                     data-slug="{{ $row->slug }}" 
                                                     data-description="{{ $row->description }}"
                                                     data-bs-toggle="modal" 
                                                     data-bs-target="#viewModal">
                                                 View
                                             </button>

                                                    <a href="{{ route('edit.blog', [$row->id]) }}"
                                                        class="btn btn-success btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal"
                                                        onclick="deleteData({{ $row->id }})"
                                                        class="btn btn-danger btn-sm"  title="delete">
                                                        <i class="fa-solid fa-trash"></i> Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination -->
                            <div class="d-flex justify-content-center mt-3">
                                <nav>
                                    <ul class="pagination" id="pagination">
                                        <li class="page-item disabled" id="prevPage">
                                            <a class="page-link" href="#">Previous</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item" id="nextPage">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- end cardbody -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
 
    </div>
    @include('admin.blog_management.view_tag_details')  
           <!--tinymce js-->
           <script src="assets/libs/tinymce/tinymce.min.js"></script>

           <!-- Summernote js -->
           <script src="assets/libs/summernote/summernote-bs4.min.js"></script>
   
           <!-- init js -->
           <script src="assets/js/pages/form-editor.init.js"></script>
    <script>
        document.getElementById('search').addEventListener('keyup', function() {
            let filter = this.value.toLowerCase();
            let rows = document.querySelectorAll('#blogTable tbody tr');
            rows.forEach(row => {
                let tagName = row.children[1].innerText.toLowerCase();
                let tagSlug = row.children[2].innerText.toLowerCase();
                row.style.display = (tagName.includes(filter) || tagSlug.includes(filter)) ? '' : 'none';
            });
        });

        // Pagination Logic
        document.addEventListener("DOMContentLoaded", function () {
        let rowsPerPage = 7;
        let rows = document.querySelectorAll('#blogTable tbody tr');
        let paginationContainer = document.getElementById('pagination');
        let currentPage = 1;
        let totalPages = Math.ceil(rows.length / rowsPerPage);

        function updatePagination() {
            paginationContainer.innerHTML = '';

            // Previous button
            let prevBtn = document.createElement('li');
            prevBtn.className = `page-item ${currentPage === 1 ? 'disabled' : ''}`;
            prevBtn.innerHTML = `<a class="page-link" href="#">Previous</a>`;
            prevBtn.addEventListener('click', function (e) {
                e.preventDefault();
                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                }
            });
            paginationContainer.appendChild(prevBtn);

            // Page numbers
            for (let i = 1; i <= totalPages; i++) {
                let pageItem = document.createElement('li');
                pageItem.className = `page-item ${i === currentPage ? 'active' : ''}`;
                pageItem.innerHTML = `<a class="page-link" href="#">${i}</a>`;
                pageItem.addEventListener('click', function (e) {
                    e.preventDefault();
                    currentPage = i;
                    showPage(currentPage);
                });
                paginationContainer.appendChild(pageItem);
            }

            // Next button
            let nextBtn = document.createElement('li');
            nextBtn.className = `page-item ${currentPage === totalPages ? 'disabled' : ''}`;
            nextBtn.innerHTML = `<a class="page-link" href="#">Next</a>`;
            nextBtn.addEventListener('click', function (e) {
                e.preventDefault();
                if (currentPage < totalPages) {
                    currentPage++;
                    showPage(currentPage);
                }
            });
            paginationContainer.appendChild(nextBtn);
        }

        function showPage(page) {
            let start = (page - 1) * rowsPerPage;
            let end = start + rowsPerPage;

            rows.forEach((row, index) => {
                row.style.display = (index >= start && index < end) ? '' : 'none';
            });

            updatePagination();
        }

        if (totalPages > 1) {
            showPage(currentPage);
        } else {
            paginationContainer.style.display = "none"; // Hide pagination if only 1 page
        }
    });
        function deleteData(id) {
            $("#deleteForm").attr("action", '{{ url('admin/destroy-blog') }}' + "/" + id);
        }

          // View Button Click - Load Data into Modal
          document.querySelectorAll('.viewBtn').forEach(button => {
            button.addEventListener('click', function () {
                document.getElementById('viewName').value = this.getAttribute('data-name');
                document.getElementById('viewSlug').value = this.getAttribute('data-slug');
                document.getElementById('viewDescription').value = this.getAttribute('data-description');
            });
        });


    </script>
@endsection
