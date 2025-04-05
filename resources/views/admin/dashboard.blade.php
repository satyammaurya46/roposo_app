@extends('admin.layout.master_layout')
@section('title', 'Dashboard')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Droid</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                            <!-- end ol -->
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="p-4">
                                        <div class="d-flex">
                                            <div class="flex-1">

                                                <h3 class="mb-3"><span class="counter_value" data-target="519545">0</span>
                                                </h3>
                                            </div>
                                            <div class="">
                                                <p class="badge bg-soft-primary text-primary fw-bold font-size-12 mb-0">
                                                    Daily</p>
                                            </div>
                                        </div>
                                        <h5 class="text-muted font-size-14 mb-0">New Visitors</h5>
                                    </div>
                                    <div>
                                        <div id="visitors_charts" class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div>
                                <!-- end cardbody -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-xl-4 col-md-6">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="p-4">
                                        <div class="d-flex">
                                            <div class="flex-1">
                                                <h3 class="mb-3">$<span class="counter_value" data-target="97450">0</span>
                                                </h3>
                                            </div>
                                            <div class="">
                                                <p class="badge bg-primary font-size-12 mb-0">Monthly</p>
                                            </div>
                                        </div>
                                        <h5 class="text-muted font-size-14">Revenue</h5>
                                        <div class="progress mt-2" style="height: 5px;">
                                            <div class="progress-bar bg-progress" role="progressbar" style="width: 70%"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>

                                        </div>
                                        <div class="d-flex">
                                            <div class="flex-1">
                                                <p class="mt-3 text-muted fw-bold font-size-14 mb-0">Since last month
                                                </p>
                                            </div>
                                            <div class="">
                                                <p class="text-success font-size-13 mb-0 mt-3"><i
                                                        class="mdi mdi-debug-step-out "></i>87.4
                                                    %</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end cardbody -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-xl-4 col-md-6">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="p-4">
                                        <div class="d-flex">
                                            <div class="flex-1">
                                                <h3 class="mb-3">+<span class="counter_value"
                                                        data-target="213545">0</span>
                                                </h3>
                                            </div>
                                            <div class="">
                                                <p class="badge bg-soft-primary text-primary fw-bold font-size-12">
                                                    Yearly</p>
                                            </div>
                                        </div>
                                        <h5 class="text-muted font-size-14 mb-0">Total Order</h5>
                                    </div>
                                    <div>
                                        <div id="order_charts" class="chart-spark" dir="ltr"></div>
                                    </div>
                                </div>
                                <!-- end cardbody -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="card">
                        <div class="card-body">
                            <div class="float-end d-none d-md-inline-block">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="btn btn-sm btn-light active " id="pills-home-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
                                            aria-controls="pills-home" aria-selected="true">Monthly</button>
                                    </li>
                                    <!-- end li -->
                                    <li class="nav-item" role="presentation">
                                        <button class="btn btn-sm btn-light ms-2 py-1" id="pills-profile-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
                                            role="tab" aria-controls="pills-profile"
                                            aria-selected="false">Yearly</button>
                                    </li>
                                    <!-- end li -->
                                </ul>
                                <!-- end ul -->
                            </div>
                            <div>
                                <h4 class="card-title mb-4">Overview</h4>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <div>
                                        <div id="spline_area_month" class="column-charts" dir="ltr">
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab -->
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                    <div>
                                        <div id="spline_area_year" class="column-charts" dir="ltr">
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab -->
                            </div>
                        </div>
                        <!-- end cardbody -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end">
                                <select class="form-select form-select-sm">
                                    <option selected>Apr</option>
                                    <option value="1">Mar</option>
                                    <option value="2">Feb</option>
                                    <option value="3">Jan</option>
                                </select>
                            </div>
                            <h4 class="card-title mb-4">Customer Trends by Month</h4>

                            <div id="line_chart" class="apex-charts"></div>
                        </div>
                    </div>
                    <!-- end card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical text-muted"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Yearly Report</a>
                                    <!-- item-->
                                </div>
                            </div>
                            <!-- end dropdown -->
                            <h4 class="card-title mb-4">Earning Reports</h4>
                            <div class="text-center">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div>
                                            <div class="mb-2">
                                                <div class="progress progressbar-vertical-graph">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar"
                                                        style="width: 6px; height:68px;" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progressbar-vertical-graph">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar"
                                                        style="width: 6px; height:45px;" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progressbar-vertical-graph">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar"
                                                        style="width: 6px; height:55px;" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progressbar-vertical-graph">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar"
                                                        style="width: 6px; height:70px;" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progressbar-vertical-graph">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar"
                                                        style="width: 6px; height:48px;" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progressbar-vertical-graph">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar"
                                                        style="width: 6px; height:35px;" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progressbar-vertical-graph">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar"
                                                        style="width: 6px; height:54px;" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                            </div>
                                            <!-- end -->
                                            <p class="text-muted text-truncate mb-2">Weekly Earnings</p>
                                            <h5 class="mb-0">$12,971</h5>
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-sm-6">
                                        <div class="mt-5 mt-sm-0">
                                            <div class="mb-2">
                                                <div class="progress progressbar-vertical-graph">
                                                    <div class="progress-bar bg-success rounded" role="progressbar"
                                                        style="width: 6px; height:28px;" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progressbar-vertical-graph">
                                                    <div class="progress-bar bg-success rounded" role="progressbar"
                                                        style="width: 6px; height:45px;" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progressbar-vertical-graph">
                                                    <div class="progress-bar bg-success rounded" role="progressbar"
                                                        style="width: 6px; height:31px;" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progressbar-vertical-graph">
                                                    <div class="progress-bar bg-success rounded" role="progressbar"
                                                        style="width: 6px; height:70px;" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progressbar-vertical-graph">
                                                    <div class="progress-bar bg-success rounded" role="progressbar"
                                                        style="width: 6px; height:48px;" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progressbar-vertical-graph">
                                                    <div class="progress-bar bg-success rounded" role="progressbar"
                                                        style="width: 6px; height:35px;" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progressbar-vertical-graph">
                                                    <div class="progress-bar bg-success rounded" role="progressbar"
                                                        style="width: 6px; height:54px;" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <p class="text-muted text-truncate mb-2">Monthly Earnings</p>
                                            <h5 class="mb-0">$21,235</h5>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                        <!-- end cardbody -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical text-muted"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                    <!-- item-->
                                </div>
                            </div>
                            <!-- end dropdown -->
                            <h4 class="card-title font-size-16">Targets</h4>
                            <div class="">
                                <div id="target_charts" class="apex-charts"></div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex">
                                        <div class="">
                                            <i class="mdi mdi-circle-double font-size-13 me-2 text-primary"></i>
                                        </div>
                                        <div>
                                            <h5 class="font-size-14">Weekly
                                                Targets</h5>
                                            <h5 class="font-size-18 text-muted mb-0">$1845</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-6">
                                    <div class="d-flex">
                                        <div class="">
                                            <i class="mdi mdi-circle-double font-size-13 me-2 text-success"></i>
                                        </div>
                                        <div>
                                            <h5 class="font-size-14">Monthly
                                                Targets</h5>
                                            <h5 class="font-size-18 text-muted mb-0">$29537</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

                <div class="col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical text-muted"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                    <!-- item-->
                                </div>
                            </div>
                            <!-- end dropdown -->
                            <h4 class="card-title mb-0">Yearly Revenue</h4>


                            <div class="text-center">
                                <p class="text-muted font-size-14 fw-bold mt-4">Total Revenue</p>
                                <h3 class="">$91,854</h3>
                                <p class="text-muted font-size-15">
                                    <span class="text-success fw-bold">69%
                                        UP</span>
                                    From last
                                    year
                                </p>
                                <div>
                                    <div id="column_chart_datalabel" class="column-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body bg-transparent">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical text-muted"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                </div>
                            </div>
                            <!-- end dropdown -->
                            <h4 class="card-title mb-4">Recent Activity Feed</h4>

                            <div class="pe-lg-3" data-simplebar style="max-height: 350px;">
                                <ul class="list-unstyled activity-wid">
                                    <!-- start li -->
                                    <li class="activity-list border-left">
                                        <div class="activity-icon avatar-xs">
                                            <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                <i class="ri-edit-2-fill"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <div class="d-flex">
                                                <div class="flex-1">
                                                    <h5 class="font-size-13">28 Apr, 2021 </h5>
                                                </div>
                                                <div>
                                                    <small class="text-muted">12:07 am</small>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-muted mb-0">Responded to need “Volunteer Activities”
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end li -->
                                    <li class="activity-list">
                                        <div class="activity-icon avatar-xs">
                                            <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                <i class="ri-user-2-fill"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <div class="d-flex">
                                                <div class="flex-1">
                                                    <h5 class="font-size-13">21 Apr, 2021</h5>
                                                </div>
                                                <div>
                                                    <small class="text-muted">08:01 pm</small>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-muted mb-0">Added an interest “Volunteer Activities”
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end li -->
                                    <li class="activity-list">
                                        <div class="activity-icon avatar-xs">
                                            <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                <i class="ri-bar-chart-fill"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <div class="d-flex">
                                                <div class="flex-1">
                                                    <h5 class="font-size-13">17 Apr, 2021</h5>
                                                </div>
                                                <div>
                                                    <small class="text-muted">09:23 am</small>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-muted mb-0">Joined the group “Boardsmanship
                                                    Forum”
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end li -->

                                    <li class="activity-list">
                                        <div class="activity-icon avatar-xs">
                                            <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                <i class="ri-mail-fill"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <div class="d-flex">
                                                <div class="flex-1">
                                                    <h5 class="font-size-13">11 Apr, 2021 </h5>
                                                </div>
                                                <div>
                                                    <small class="text-muted">05:10 pm</small>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-muted mb-0">Responded to need “In-Kind Opportunity”
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end li -->
                                    <li class="activity-list">
                                        <div class="activity-icon avatar-xs">
                                            <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                <i class="ri-calendar-2-fill"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <div class="d-flex">
                                                <div class="flex-1">
                                                    <h5 class="font-size-13">07 Apr, 2021</h5>
                                                </div>
                                                <div>
                                                    <small class="text-muted">12:47 pm</small>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="text-muted mb-0">Created need “Volunteer Activities”</p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end li -->
                                    <li class="activity-list">
                                        <div class="activity-icon avatar-xs">
                                            <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                <i class="ri-edit-2-fill"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <div class="d-flex">
                                                <div class="flex-1">
                                                    <h5 class="font-size-13">05 Apr, 2021 </h5>
                                                </div>
                                                <div>
                                                    <small class="text-muted">03:09 pm</small>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-muted mb-0">Attending the event “Some New Event”</p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end li -->
                                    <li class="activity-list">
                                        <div class="activity-icon avatar-xs">
                                            <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                <i class="ri-user-2-fill"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <div class="d-flex">
                                                <div class="flex-1">
                                                    <h5 class="font-size-13">02 Apr, 2021 </h5>
                                                </div>
                                                <div>
                                                    <small class="text-muted">12:07 am</small>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-muted mb-0">Responded to need “In-Kind Opportunity”
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- end li -->
                                </ul>
                                <!-- end ul -->
                            </div>
                        </div>
                        <!-- end body -->
                        <div>

                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical text-muted"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Status</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                            <!-- end dropdown -->
                            <h4 class="card-title mb-4">Latest Transactions</h4>
                            <div class="table-responsive">
                                <table class="table table-centered border table-nowrap mb-0"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Customer ID</th>
                                            <th>Billing Name</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                        <!-- end tr -->
                                    </thead>
                                    <!-- end thead -->
                                    <tbody>
                                        <tr>
                                            <td>
                                                #DD4951
                                                <p class="text-muted mb-0 font-size-11">24-03-2021</p>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="me-3">
                                                        <img src="{{ asset('public/backend/assets/images/users/avatar-1.jpg') }}"
                                                            class="avatar-xs h-auto rounded-circle" alt="Error">
                                                    </div>
                                                    <div>
                                                        <h5 class="font-size-13 text-truncate mb-1"><a href="#"
                                                                class="text-dark">Julia Fox</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 font-size-11 text-uppercase">
                                                            Grenada</p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <h6 class="mb-1 font-size-13">$32,960</h6>
                                                <p class="text-success text-uppercase  mb-0 font-size-11"><i
                                                        class="mdi mdi-circle-medium"></i>paid</p>
                                            </td>
                                            <td>
                                                <h6 class="mb-1 font-size-13">Stock</h6>
                                                <p class="text-primary mb-0 font-size-11">ORDS- 2546881</p>
                                            </td>
                                            <td>
                                                <ul class="d-flex list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="btn btn-light p-0 avatar-xs d-block rounded-circle">
                                                            <span class="avatar-title bg-transparent text-body">
                                                                <i class="mdi mdi-trash-can-outline"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <!-- end li -->
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="btn btn-light p-0 avatar-xs d-block rounded-circle">
                                                            <span class="avatar-title bg-transparent text-body">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <!-- end li -->
                                                </ul>
                                            </td>

                                            <td style="width: 134px">
                                                <div class="btn btn-soft-primary btn-sm">View more<i
                                                        class="mdi mdi-arrow-right ms-1"></i></div>
                                            </td>
                                        </tr>
                                        <!-- end /tr -->
                                        <tr>
                                            <td>
                                                #DD4952
                                                <p class="text-muted mb-0 font-size-11">25-03-2021</p>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="me-3">
                                                        <img src="{{ asset('public/backend/assets/images/users/avatar-2.jpg') }}"
                                                            class="avatar-xs h-auto rounded-circle" alt="Error">
                                                    </div>
                                                    <div>
                                                        <h5 class="font-size-13 text-truncate mb-1"><a href="#"
                                                                class="text-dark">Max Jazz</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 font-size-11 text-uppercase">
                                                            Vatican City</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="mb-1 font-size-13">$30,785</h6>
                                                <p class="text-success text-uppercase mb-0 font-size-11"><i
                                                        class="mdi mdi-circle-medium "></i>paid</p>
                                            </td>
                                            <td>
                                                <h6 class="mb-1 font-size-13">Out of Stock</h6>
                                                <p class="text-primary mb-0 font-size-11">ORDS- 2546882</p>
                                            </td>
                                            <td>
                                                <ul class="d-flex list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="btn btn-light p-0 avatar-xs d-block rounded-circle">
                                                            <span class="avatar-title bg-transparent text-body">
                                                                <i class="mdi mdi-trash-can-outline"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <!-- end li -->
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="btn btn-light p-0 avatar-xs d-block rounded-circle">
                                                            <span class="avatar-title bg-transparent text-body">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <!-- end li -->
                                                </ul>
                                            </td>

                                            <td>
                                                <div class="btn btn-soft-primary btn-sm">View more<i
                                                        class="mdi mdi-arrow-right ms-1"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- end /tr -->
                                        <tr>
                                            <td>
                                                #DD4953
                                                <p class="text-muted mb-0 font-size-11">26-03-2021</p>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="me-3">
                                                        <img src="{{ asset('public/backend/assets/images/users/avatar-3.jpg') }}"
                                                            class="avatar-xs h-auto rounded-circle" alt="Error">
                                                    </div>
                                                    <div>
                                                        <h5 class="font-size-13 text-truncate mb-1"><a href="#"
                                                                class="text-dark">Jems Clarence</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 font-size-11 text-uppercase">
                                                            Grenada</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="mb-1 font-size-13">$19,191</h6>
                                                <p class="text-warning text-uppercase  mb-0 font-size-11"><i
                                                        class="mdi mdi-circle-medium"></i>Pending</p>
                                            </td>
                                            <td>
                                                <h6 class="mb-1 font-size-13">Stock</h6>
                                                <p class="text-primary mb-0 font-size-11">ORDS- 2546883</p>
                                            </td>
                                            <td>
                                                <ul class="d-flex list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="btn btn-light p-0 avatar-xs d-block rounded-circle">
                                                            <span class="avatar-title bg-transparent text-body">
                                                                <i class="mdi mdi-trash-can-outline"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <!-- end li -->
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="btn btn-light p-0 avatar-xs d-block rounded-circle">
                                                            <span class="avatar-title bg-transparent text-body">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <!-- end li -->
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="btn btn-soft-primary btn-sm">View more<i
                                                        class="mdi mdi-arrow-right ms-1"></i>
                                                </div>
                                            </td>

                                        </tr>
                                        <!-- end /tr -->
                                        <tr>
                                            <td>
                                                #DD4954
                                                <p class="text-muted mb-0 font-size-11">27-03-2021</p>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="me-3">
                                                        <img src="{{ asset('public/backend/assets/images/users/avatar-4.jpg') }}"
                                                            class="avatar-xs h-auto rounded-circle" alt="Error">
                                                    </div>
                                                    <div>
                                                        <h5 class="font-size-13 text-truncate mb-1"><a href="#"
                                                                class="text-dark">Prezy Summa</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 font-size-11 text-uppercase">
                                                            Maldivse</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="mb-1 font-size-13">$34,450</h6>
                                                <p class="text-success text-uppercase mb-0 font-size-11"><i
                                                        class="mdi mdi-circle-medium "></i>paid</p>
                                            </td>
                                            <td>
                                                <h6 class="mb-1 font-size-13">Out of Stock</h6>
                                                <p class="text-primary mb-0 font-size-11">ORDS- 2546884</p>
                                            </td>
                                            <td>
                                                <ul class="d-flex list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="btn btn-light p-0 avatar-xs d-block rounded-circle">
                                                            <span class="avatar-title bg-transparent text-body">
                                                                <i class="mdi mdi-trash-can-outline"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <!-- end li -->
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="btn btn-light p-0 avatar-xs d-block rounded-circle">
                                                            <span class="avatar-title bg-transparent text-body">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <!-- end li -->
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="btn btn-soft-primary btn-sm">View more<i
                                                        class="mdi mdi-arrow-right ms-1"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- end /tr -->
                                        <tr>
                                            <td>
                                                #DD4955
                                                <p class="text-muted mb-0 font-size-11">29-03-2021</p>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="me-3">
                                                        <img src="{{ asset('public/backend/assets/images/users/avatar-5.jpg') }}"
                                                            class="avatar-xs h-auto rounded-circle" alt="Error">
                                                    </div>
                                                    <div>
                                                        <h5 class="font-size-13 text-truncate mb-1"><a href="#"
                                                                class="text-dark">Julia Fox</a>
                                                        </h5>
                                                        <p class="text-muted mb-0 font-size-11 text-uppercase">
                                                            Glory
                                                            Road</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="mb-1 font-size-13">$24,450</h6>
                                                <p class="text-danger text-uppercase mb-0 font-size-11"><i
                                                        class="mdi mdi-circle-medium"></i>Canceled</p>
                                            </td>
                                            <td>
                                                <h6 class="mb-1 font-size-13">Stock</h6>
                                                <p class="text-primary mb-0 font-size-11">ORDS- 2546885</p>
                                            </td>
                                            <td>
                                                <ul class="d-flex list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="btn btn-light p-0 avatar-xs d-block rounded-circle">
                                                            <span class="avatar-title bg-transparent text-body">
                                                                <i class="mdi mdi-trash-can-outline"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <!-- end li -->
                                                    <li class="list-inline-item">
                                                        <a href="#"
                                                            class="btn btn-light p-0 avatar-xs d-block rounded-circle">
                                                            <span class="avatar-title bg-transparent text-body">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <!-- end li -->
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="btn btn-soft-primary btn-sm">View more<i
                                                        class="mdi mdi-arrow-right ms-1"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- end /tr -->
                                    </tbody>
                                    <!-- end tbody -->
                                </table>
                                <!-- end table -->
                            </div>
                            <!-- end tableresponsive -->
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-5 col-9">
                                    <h5 class="font-size-15 mb-3">Top Selling Product</h5>
                                </div>
                                <!-- end col -->
                                <div class="col-md-7 col-3">
                                    <ul class="list-inline user-chat-nav text-end mb-2">
                                        <li class="list-inline-item">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle card-drop"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-magnify text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-0">
                                                    <form class="p-2">
                                                        <div class="search-box">
                                                            <div class="position-relative">
                                                                <input type="text"
                                                                    class="form-control rounded bg-light border-0"
                                                                    placeholder="Search...">
                                                                <i class="mdi mdi-magnify search-icon"></i>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- end li -->
                                        <li class="list-inline-item d-none d-sm-inline-block">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle card-drop"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-cog text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">View Profile</a>
                                                    <a class="dropdown-item" href="#">Add Product</a>
                                                    <a class="dropdown-item" href="#">Remove Product</a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- end li -->
                                    </ul>
                                    <!-- end ul -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="table-responsive">
                                <table class="table table-nowrap mb-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="avatar-sm">
                                                    <span class="avatar-title rounded bg-light">
                                                        <img src="{{ asset('public/backend/assets/images/product/img-11.png') }}"
                                                            class="avatar-sm" alt="Error">
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <h6 class="mb-0">Nike (Black)</h6>
                                                    <a href="" class="text-primary fw-bold font-size-11">ID
                                                        :
                                                        #NC1097</a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <h6 class="mb-0">Total Sales</h6>
                                                    <p class="fw-bold mb-0">91</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <h6 class="mb-0">Earning</h6>
                                                    <p class="fw-bold mb-0 text-success">
                                                        33%
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- end tr -->
                                        <tr>
                                            <td>
                                                <div class="avatar-sm">
                                                    <span class="avatar-title rounded bg-light">
                                                        <img src="{{ asset('public/backend/assets/images/product/img-9.png') }}"
                                                            class="avatar-sm" alt="Error">
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <h6 class="mb-0">Wool Runners (Pink)</h6>
                                                    <a href="" class="text-primary fw-bold font-size-11">ID
                                                        :
                                                        #NC1098</a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <h6 class="mb-0">Total Sales</h6>
                                                    <p class="fw-bold mb-0">90</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <h6 class="mb-0">Earning</h6>
                                                    <p class="fw-bold mb-0 text-success">
                                                        35%
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- end tr -->
                                        <tr>
                                            <td>
                                                <div class="avatar-sm">
                                                    <span class="avatar-title rounded bg-light">
                                                        <img src="{{ asset('public/backend/assets/images/product/img-1.png') }}"
                                                            class="avatar-sm" alt="Error">
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <h6 class="mb-0">Air Jordan 1 TS</h6>
                                                    <a href="" class="text-primary fw-bold font-size-11">ID
                                                        :
                                                        #NC1099</a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <h6 class="mb-0">Total Sales</h6>
                                                    <p class="fw-bold mb-0">83</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <h6 class="mb-0">Earning</h6>
                                                    <p class="fw-bold mb-0 text-success">
                                                        25%
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- end tr -->
                                        <tr>
                                            <td>
                                                <div class="avatar-sm">
                                                    <span class="avatar-title rounded bg-light">
                                                        <img src="{{ asset('public/backend/assets/images/product/img-4.png') }}"
                                                            class="avatar-sm" alt="Error">
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <h6 class="mb-0">Reebok</h6>
                                                    <a href="" class="text-primary fw-bold font-size-11">ID
                                                        :
                                                        #NC1100</a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <h6 class="mb-0">Total Sales</h6>
                                                    <p class="fw-bold mb-0">79</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <h6 class="mb-0">Earning</h6>
                                                    <p class="fw-bold mb-0 text-success">
                                                        22%
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- end tr -->
                                        <tr>
                                            <td>
                                                <div class="avatar-sm">
                                                    <span class="avatar-title rounded bg-light">
                                                        <img src="{{ asset('public/backend/assets/images/product/img-3.png') }}"
                                                            class="avatar-sm" alt="Error">
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <h6 class="mb-0">Jordan Eclipse (Blue)</h6>
                                                    <a href="" class="text-primary fw-bold font-size-11">ID
                                                        :
                                                        #NC1101</a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <h6 class="mb-0">Total Sales</h6>
                                                    <p class="fw-bold mb-0">76</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <h6 class="mb-0">Earning</h6>
                                                    <p class="fw-bold mb-0 text-success">
                                                        30%
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- end tr -->
                                    </tbody>
                                    <!-- end t-body -->
                                </table>
                                <!-- end table -->
                            </div>
                            <!-- end table-responsive -->
                        </div>
                        <!-- end cardbody -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- end container-fluid -->
    </div>
@endsection
