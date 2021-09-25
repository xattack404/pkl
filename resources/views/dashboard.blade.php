@extends('layouts.admin_main')
@section('admincontent')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Library
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-view-dashboard"></i>
                            </h1>
                            <h6 class="text-white">Dashboard</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-chart-areaspline"></i>
                            </h1>
                            <h6 class="text-white">Charts</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-collage"></i>
                            </h1>
                            <h6 class="text-white">Widgets</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-border-outside"></i>
                            </h1>
                            <h6 class="text-white">Tables</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-arrow-all"></i>
                            </h1>
                            <h6 class="text-white">Full Width</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-receipt"></i>
                            </h1>
                            <h6 class="text-white">Forms</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-relative-scale"></i>
                            </h1>
                            <h6 class="text-white">Buttons</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-pencil"></i>
                            </h1>
                            <h6 class="text-white">Elements</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-calendar-check"></i>
                            </h1>
                            <h6 class="text-white">Calnedar</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-alert"></i>
                            </h1>
                            <h6 class="text-white">Errors</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Site Analysis</h4>
                                    <h5 class="card-subtitle">Overview of Latest Month</h5>
                                </div>
                            </div>
                            <div class="row">
                                <!-- column -->
                                <div class="col-lg-9">
                                    <div class="flot-chart">
                                        <div class="flot-chart-content" id="flot-line-chart"></div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="mdi mdi-account fs-3 mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">2540</h5>
                                                <small class="font-light">Total Users</small>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="mdi mdi-plus fs-3 font-16"></i>
                                                <h5 class="mb-0 mt-1">120</h5>
                                                <small class="font-light">New Users</small>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-3">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="mdi mdi-cart fs-3 mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">656</h5>
                                                <small class="font-light">Total Shop</small>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-3">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="mdi mdi-tag fs-3 mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">9540</h5>
                                                <small class="font-light">Total Orders</small>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-3">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="mdi mdi-table fs-3 mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">100</h5>
                                                <small class="font-light">Pending Orders</small>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-3">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="mdi mdi-web fs-3 mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">8540</h5>
                                                <small class="font-light">Online Orders</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
