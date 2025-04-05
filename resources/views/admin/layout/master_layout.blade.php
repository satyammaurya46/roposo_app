<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>@yield('title') | Roposo-App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Roposo" name="description" />
    <meta content="App" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('public/backend/assets/images/favicon.ico') }}">

    <!-- jquery.vectormap css -->
    <link href="{{ url('public/backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="{{ url('public/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link
        href="{{ url('public/backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ url('public/backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style1" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('public/backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('public/backend/assets/css/app.min.css') }}" id="app-style1" rel="stylesheet" type="text/css" />

    

</head>

<body data-topbar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        @include('admin.layout.header')

        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.layout.sidebar')
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            @yield('content')
            <!-- End Page-content -->

            @include('admin.layout.footer')

        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->

    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!--delete -->
    <div class="modal fade staticBackdrop" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Record Delete Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are You sure delete this record ?</p>
                </div>
                <div class="modal-footer">
                    <form id="deleteForm" action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-danger waves-effect waves-light">Yes,Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- JAVASCRIPT -->
    <script src="{{ url('public/backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('public/backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('public/backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ url('public/backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ url('public/backend/assets/libs/node-waves/waves.min.js') }}"></script>

     {{-- <!--tinymce js-->
    <script src="{{url('public/backend/assets/libs/tinymce/tinymce.min.js')}}"></script>

    <!-- init js -->
    <script src="{{url('public/backend/assets/js/pages/form-editor.init.js')}}"></script> --}}
    <!-- apexcharts -->
    <script src="{{ url('public/backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- jquery.vectormap map -->
    <script src="{{ url('public/backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}">
    </script>
    <script
        src="{{ url('public/backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}">
    </script>

    <!-- Required datatable js -->
    <script src="{{ url('public/backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('public/backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ url('public/backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}">
    </script>
    <script src="{{ url('public/backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
    </script>

    <script src="{{ url('public/backend/assets/js/pages/dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ url('public/backend/assets/js/app.js') }}"></script>
    <!-- Ensure page-specific scripts are loaded -->
    @stack('scripts')
    
</body>

</html>
