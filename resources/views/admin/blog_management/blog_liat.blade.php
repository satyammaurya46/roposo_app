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

    <!-- Filters -->
    <form method="GET" action="#" class="row mb-3">
        <div class="col-md-3">
            <input type="text" name="title" class="form-control" placeholder="Search by title" value="{{ request('title') }}">
        </div>
        <div class="col-md-3">
            <select name="category" class="form-control">
                <option value="">All Categories</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <select name="status" class="form-control">
                <option value="">All Status</option>
                <option value="Published" >Published</option>
                <option value="Draft" >Draft</option>
            </select>
        </div>
        <div class="col-md-2">
            <input type="date" name="from" class="form-control" placeholder="From date" value="{{ request('from') }}">
        </div>
        <div class="col-md-2">
            <input type="date" name="to" class="form-control" placeholder="To date" value="{{ request('to') }}">
        </div>
    </form>

    <div class="card">
        <div class="card-body table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Publish Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                   
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="" class="btn btn-info btn-sm">View</a>
                                <a href="" class="btn btn-warning btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                    <button class="btn btn-outline-primary btn-sm">
                                        
                                    </button>                          
                            </td>
                        </tr>
                  
                        <tr><td colspan="6" class="text-center">No blogs found.</td></tr>
                   
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{-- {{ $blogs->links() }} --}}
            </div>
         </div>
        </div>
      </div>
  </div>
</div>    
@endsection
