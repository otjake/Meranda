@extends('layouts.admin')

@section('content')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    {{ __('You are logged in!') }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                    <div class="card-body pb-0">
                        <div class="btn-group float-right">
                            <button class="btn btn-transparent dropdown-toggle p-0" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-settings"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="text-value">9.823</div>
                        <div>Members online</div>
                    </div>
                    <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                        <canvas class="chart" id="card-chart1" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-info">
                    <div class="card-body pb-0">
                        <button class="btn btn-transparent p-0 float-right" type="button">
                            <i class="icon-location-pin"></i>
                        </button>
                        <div class="text-value">9.823</div>
                        <div>Members online</div>
                    </div>
                    <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                        <canvas class="chart" id="card-chart2" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                    <div class="card-body pb-0">
                        <div class="btn-group float-right">
                            <button class="btn btn-transparent dropdown-toggle p-0" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-settings"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="text-value">9.823</div>
                        <div>Members online</div>
                    </div>
                    <div class="chart-wrapper mt-3" style="height:70px;">
                        <canvas class="chart" id="card-chart3" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-danger">
                    <div class="card-body pb-0">
                        <div class="btn-group float-right">
                            <button class="btn btn-transparent dropdown-toggle p-0" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-settings"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="text-value">9.823</div>
                        <div>Members online</div>
                    </div>
                    <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                        <canvas class="chart" id="card-chart4" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row-->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">Traffic</h4>
                        <div class="small text-muted">November 2017</div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-7 d-none d-md-block">
                        <button class="btn btn-primary float-right" type="button">
                            <i class="icon-cloud-download"></i>
                        </button>
                        <div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">
                            <label class="btn btn-outline-secondary">
                                <input id="option1" type="radio" name="options" autocomplete="off"> Day
                            </label>
                            <label class="btn btn-outline-secondary active">
                                <input id="option2" type="radio" name="options" autocomplete="off" checked=""> Month
                            </label>
                            <label class="btn btn-outline-secondary">
                                <input id="option3" type="radio" name="options" autocomplete="off"> Year
                            </label>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- /.row-->
                <div class="chart-wrapper" style="height:300px;margin-top:40px;">
                    <canvas class="chart" id="main-chart" height="300"></canvas>
                </div>
            </div>
            <div class="card-footer">
                <div class="row text-center">
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="text-muted">Visits</div>
                        <strong>29.703 Users (40%)</strong>
                        <div class="progress progress-xs mt-2">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%"
                                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="text-muted">Unique</div>
                        <strong>24.093 Users (20%)</strong>
                        <div class="progress progress-xs mt-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%"
                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="text-muted">Pageviews</div>
                        <strong>78.706 Views (60%)</strong>
                        <div class="progress progress-xs mt-2">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"
                                 aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="text-muted">New Users</div>
                        <strong>22.123 Users (80%)</strong>
                        <div class="progress progress-xs mt-2">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 80%"
                                 aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="text-muted">Bounce Rate</div>
                        <strong>40.15%</strong>
                        <div class="progress progress-xs mt-2">
                            <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-->
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="brand-card">
                    <div class="brand-card-header bg-facebook">
                        <i class="fa fa-facebook"></i>
                        <div class="chart-wrapper">
                            <canvas id="social-box-chart-1" height="90"></canvas>
                        </div>
                    </div>
                    <div class="brand-card-body">
                        <div>
                            <div class="text-value">89k</div>
                            <div class="text-uppercase text-muted small">friends</div>
                        </div>
                        <div>
                            <div class="text-value">459</div>
                            <div class="text-uppercase text-muted small">feeds</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="brand-card">
                    <div class="brand-card-header bg-twitter">
                        <i class="fa fa-twitter"></i>
                        <div class="chart-wrapper">
                            <canvas id="social-box-chart-2" height="90"></canvas>
                        </div>
                    </div>
                    <div class="brand-card-body">
                        <div>
                            <div class="text-value">973k</div>
                            <div class="text-uppercase text-muted small">followers</div>
                        </div>
                        <div>
                            <div class="text-value">1.792</div>
                            <div class="text-uppercase text-muted small">tweets</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="brand-card">
                    <div class="brand-card-header bg-linkedin">
                        <i class="fa fa-linkedin"></i>
                        <div class="chart-wrapper">
                            <canvas id="social-box-chart-3" height="90"></canvas>
                        </div>
                    </div>
                    <div class="brand-card-body">
                        <div>
                            <div class="text-value">500+</div>
                            <div class="text-uppercase text-muted small">contacts</div>
                        </div>
                        <div>
                            <div class="text-value">292</div>
                            <div class="text-uppercase text-muted small">feeds</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="brand-card">
                    <div class="brand-card-header bg-google-plus">
                        <i class="fa fa-google-plus"></i>
                        <div class="chart-wrapper">
                            <canvas id="social-box-chart-4" height="90"></canvas>
                        </div>
                    </div>
                    <div class="brand-card-body">
                        <div>
                            <div class="text-value">894</div>
                            <div class="text-uppercase text-muted small">followers</div>
                        </div>
                        <div>
                            <div class="text-value">92</div>
                            <div class="text-uppercase text-muted small">circles</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Traffic & Sales</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="callout callout-info">
                                            <small class="text-muted">New Clients</small>
                                            <br>
                                            <strong class="h4">9,123</strong>
                                            <div class="chart-wrapper">
                                                <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-->
                                    <div class="col-sm-6">
                                        <div class="callout callout-danger">
                                            <small class="text-muted">Recuring Clients</small>
                                            <br>
                                            <strong class="h4">22,643</strong>
                                            <div class="chart-wrapper">
                                                <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-->
                                </div>
                                <!-- /.row-->
                                <hr class="mt-0">
                                <div class="progress-group mb-4">
                                    <div class="progress-group-prepend">
                                        <span class="progress-group-text">Monday</span>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 34%"
                                                 aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-danger" role="progressbar"
                                                 style="width: 78%" aria-valuenow="78" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group mb-4">
                                    <div class="progress-group-prepend">
                                        <span class="progress-group-text">Tuesday</span>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 56%"
                                                 aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-danger" role="progressbar"
                                                 style="width: 94%" aria-valuenow="94" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group mb-4">
                                    <div class="progress-group-prepend">
                                        <span class="progress-group-text">Wednesday</span>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 12%"
                                                 aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-danger" role="progressbar"
                                                 style="width: 67%" aria-valuenow="67" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group mb-4">
                                    <div class="progress-group-prepend">
                                        <span class="progress-group-text">Thursday</span>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 43%"
                                                 aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-danger" role="progressbar"
                                                 style="width: 91%" aria-valuenow="91" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group mb-4">
                                    <div class="progress-group-prepend">
                                        <span class="progress-group-text">Friday</span>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 22%"
                                                 aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-danger" role="progressbar"
                                                 style="width: 73%" aria-valuenow="73" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group mb-4">
                                    <div class="progress-group-prepend">
                                        <span class="progress-group-text">Saturday</span>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 53%"
                                                 aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-danger" role="progressbar"
                                                 style="width: 82%" aria-valuenow="82" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group mb-4">
                                    <div class="progress-group-prepend">
                                        <span class="progress-group-text">Sunday</span>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 9%"
                                                 aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-danger" role="progressbar"
                                                 style="width: 69%" aria-valuenow="69" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-->
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="callout callout-warning">
                                            <small class="text-muted">Pageviews</small>
                                            <br>
                                            <strong class="h4">78,623</strong>
                                            <div class="chart-wrapper">
                                                <canvas id="sparkline-chart-3" width="100" height="30"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-->
                                    <div class="col-sm-6">
                                        <div class="callout callout-success">
                                            <small class="text-muted">Organic</small>
                                            <br>
                                            <strong class="h4">49,123</strong>
                                            <div class="chart-wrapper">
                                                <canvas id="sparkline-chart-4" width="100" height="30"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-->
                                </div>
                                <!-- /.row-->
                                <hr class="mt-0">
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <i class="icon-user progress-group-icon"></i>
                                        <div>Male</div>
                                        <div class="ml-auto font-weight-bold">43%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                 style="width: 43%" aria-valuenow="43" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group mb-5">
                                    <div class="progress-group-header">
                                        <i class="icon-user-female progress-group-icon"></i>
                                        <div>Female</div>
                                        <div class="ml-auto font-weight-bold">37%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                 style="width: 43%" aria-valuenow="43" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header align-items-end">
                                        <i class="icon-globe progress-group-icon"></i>
                                        <div>Organic Search</div>
                                        <div class="ml-auto font-weight-bold mr-2">191.235</div>
                                        <div class="text-muted small">(56%)</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                 style="width: 56%" aria-valuenow="56" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header align-items-end">
                                        <i class="icon-social-facebook progress-group-icon"></i>
                                        <div>Facebook</div>
                                        <div class="ml-auto font-weight-bold mr-2">51.223</div>
                                        <div class="text-muted small">(15%)</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                 style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header align-items-end">
                                        <i class="icon-social-twitter progress-group-icon"></i>
                                        <div>Twitter</div>
                                        <div class="ml-auto font-weight-bold mr-2">37.564</div>
                                        <div class="text-muted small">(11%)</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                 style="width: 11%" aria-valuenow="11" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header align-items-end">
                                        <i class="icon-social-linkedin progress-group-icon"></i>
                                        <div>LinkedIn</div>
                                        <div class="ml-auto font-weight-bold mr-2">27.319</div>
                                        <div class="text-muted small">(8%)</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                 style="width: 8%" aria-valuenow="8" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-->
                        </div>
                        <!-- /.row-->
                        <br>
                        <table class="table table-responsive-sm table-hover table-outline mb-0">
                            <thead class="thead-light">
                            <tr>
                                <th class="text-center">
                                    <i class="icon-people"></i>
                                </th>
                                <th>User</th>
                                <th class="text-center">Country</th>
                                <th>Usage</th>
                                <th class="text-center">Payment Method</th>
                                <th>Activity</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">
                                    <div class="avatar">
                                        <img class="img-avatar" src="img/avatars/1.jpg"
                                             alt="admin@bootstrapmaster.com">
                                        <span class="avatar-status badge-success"></span>
                                    </div>
                                </td>
                                <td>
                                    <div>Yiorgos Avraamu</div>
                                    <div class="small text-muted">
                                        <span>New</span> | Registered: Jan 1, 2015
                                    </div>
                                </td>
                                <td class="text-center">
                                    <i class="flag-icon flag-icon-us h4 mb-0" id="us" title="us"></i>
                                </td>
                                <td>
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <strong>50%</strong>
                                        </div>
                                        <div class="float-right">
                                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%"
                                             aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <i class="fa fa-cc-mastercard" style="font-size:24px"></i>
                                </td>
                                <td>
                                    <div class="small text-muted">Last login</div>
                                    <strong>10 sec ago</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="avatar">
                                        <img class="img-avatar" src="img/avatars/2.jpg"
                                             alt="admin@bootstrapmaster.com">
                                        <span class="avatar-status badge-danger"></span>
                                    </div>
                                </td>
                                <td>
                                    <div>Avram Tarasios</div>
                                    <div class="small text-muted">
                                        <span>Recurring</span> | Registered: Jan 1, 2015
                                    </div>
                                </td>
                                <td class="text-center">
                                    <i class="flag-icon flag-icon-br h4 mb-0" id="br" title="br"></i>
                                </td>
                                <td>
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <strong>10%</strong>
                                        </div>
                                        <div class="float-right">
                                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 10%"
                                             aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <i class="fa fa-cc-visa" style="font-size:24px"></i>
                                </td>
                                <td>
                                    <div class="small text-muted">Last login</div>
                                    <strong>5 minutes ago</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="avatar">
                                        <img class="img-avatar" src="img/avatars/3.jpg"
                                             alt="admin@bootstrapmaster.com">
                                        <span class="avatar-status badge-warning"></span>
                                    </div>
                                </td>
                                <td>
                                    <div>Quintin Ed</div>
                                    <div class="small text-muted">
                                        <span>New</span> | Registered: Jan 1, 2015
                                    </div>
                                </td>
                                <td class="text-center">
                                    <i class="flag-icon flag-icon-in h4 mb-0" id="in" title="in"></i>
                                </td>
                                <td>
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <strong>74%</strong>
                                        </div>
                                        <div class="float-right">
                                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 74%"
                                             aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <i class="fa fa-cc-stripe" style="font-size:24px"></i>
                                </td>
                                <td>
                                    <div class="small text-muted">Last login</div>
                                    <strong>1 hour ago</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="avatar">
                                        <img class="img-avatar" src="img/avatars/4.jpg"
                                             alt="admin@bootstrapmaster.com">
                                        <span class="avatar-status badge-secondary"></span>
                                    </div>
                                </td>
                                <td>
                                    <div>Enéas Kwadwo</div>
                                    <div class="small text-muted">
                                        <span>New</span> | Registered: Jan 1, 2015
                                    </div>
                                </td>
                                <td class="text-center">
                                    <i class="flag-icon flag-icon-fr h4 mb-0" id="fr" title="fr"></i>
                                </td>
                                <td>
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <strong>98%</strong>
                                        </div>
                                        <div class="float-right">
                                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 98%"
                                             aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <i class="fa fa-paypal" style="font-size:24px"></i>
                                </td>
                                <td>
                                    <div class="small text-muted">Last login</div>
                                    <strong>Last month</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="avatar">
                                        <img class="img-avatar" src="img/avatars/5.jpg"
                                             alt="admin@bootstrapmaster.com">
                                        <span class="avatar-status badge-success"></span>
                                    </div>
                                </td>
                                <td>
                                    <div>Agapetus Tadeáš</div>
                                    <div class="small text-muted">
                                        <span>New</span> | Registered: Jan 1, 2015
                                    </div>
                                </td>
                                <td class="text-center">
                                    <i class="flag-icon flag-icon-es h4 mb-0" id="es" title="es"></i>
                                </td>
                                <td>
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <strong>22%</strong>
                                        </div>
                                        <div class="float-right">
                                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 22%"
                                             aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <i class="fa fa-google-wallet" style="font-size:24px"></i>
                                </td>
                                <td>
                                    <div class="small text-muted">Last login</div>
                                    <strong>Last week</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="avatar">
                                        <img class="img-avatar" src="img/avatars/6.jpg"
                                             alt="admin@bootstrapmaster.com">
                                        <span class="avatar-status badge-danger"></span>
                                    </div>
                                </td>
                                <td>
                                    <div>Friderik Dávid</div>
                                    <div class="small text-muted">
                                        <span>New</span> | Registered: Jan 1, 2015
                                    </div>
                                </td>
                                <td class="text-center">
                                    <i class="flag-icon flag-icon-pl h4 mb-0" id="pl" title="pl"></i>
                                </td>
                                <td>
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <strong>43%</strong>
                                        </div>
                                        <div class="float-right">
                                            <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 43%"
                                             aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <i class="fa fa-cc-amex" style="font-size:24px"></i>
                                </td>
                                <td>
                                    <div class="small text-muted">Last login</div>
                                    <strong>Yesterday</strong>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row-->
    </div>
</div>
@endsection
@section('scripts')
    <script>
        "use strict";

        /* eslint-disable object-shorthand */

        /* global Chart, CustomTooltips, getStyle, hexToRgba */

        /**
         * --------------------------------------------------------------------------
         * CoreUI Free Boostrap Admin Template (v2.1.15): main.js
         * Licensed under MIT (https://coreui.io/license)
         * --------------------------------------------------------------------------
         */

        /* eslint-disable no-magic-numbers */
        // Disable the on-canvas tooltip
        Chart.defaults.global.pointHitDetectionRadius = 1;
        Chart.defaults.global.tooltips.enabled = false;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.position = 'nearest';
        Chart.defaults.global.tooltips.custom = CustomTooltips;
        Chart.defaults.global.tooltips.intersect = true;

        Chart.defaults.global.tooltips.callbacks.labelColor = function (tooltipItem, chart) {
            return {
                backgroundColor: chart.data.datasets[tooltipItem.datasetIndex].borderColor
            };
        }; // eslint-disable-next-line no-unused-vars


        var cardChart1 = new Chart($('#card-chart1'), {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: getStyle('--primary'),
                    borderColor: 'rgba(255,255,255,.55)',
                    data: [65, 59, 84, 84, 51, 55, 40]
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            color: 'transparent',
                            zeroLineColor: 'transparent'
                        },
                        ticks: {
                            fontSize: 2,
                            fontColor: 'transparent'
                        }
                    }],
                    yAxes: [{
                        display: false,
                        ticks: {
                            display: false,
                            min: 35,
                            max: 89
                        }
                    }]
                },
                elements: {
                    line: {
                        borderWidth: 1
                    },
                    point: {
                        radius: 4,
                        hitRadius: 10,
                        hoverRadius: 4
                    }
                }
            }
        }); // eslint-disable-next-line no-unused-vars

        var cardChart2 = new Chart($('#card-chart2'), {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: getStyle('--info'),
                    borderColor: 'rgba(255,255,255,.55)',
                    data: [1, 18, 9, 17, 34, 22, 11]
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            color: 'transparent',
                            zeroLineColor: 'transparent'
                        },
                        ticks: {
                            fontSize: 2,
                            fontColor: 'transparent'
                        }
                    }],
                    yAxes: [{
                        display: false,
                        ticks: {
                            display: false,
                            min: -4,
                            max: 39
                        }
                    }]
                },
                elements: {
                    line: {
                        tension: 0.00001,
                        borderWidth: 1
                    },
                    point: {
                        radius: 4,
                        hitRadius: 10,
                        hoverRadius: 4
                    }
                }
            }
        }); // eslint-disable-next-line no-unused-vars

        var cardChart3 = new Chart($('#card-chart3'), {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: 'rgba(255,255,255,.2)',
                    borderColor: 'rgba(255,255,255,.55)',
                    data: [78, 81, 80, 45, 34, 12, 40]
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }]
                },
                elements: {
                    line: {
                        borderWidth: 2
                    },
                    point: {
                        radius: 0,
                        hitRadius: 10,
                        hoverRadius: 4
                    }
                }
            }
        }); // eslint-disable-next-line no-unused-vars

        var cardChart4 = new Chart($('#card-chart4'), {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'January', 'February', 'March', 'April'],
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: 'rgba(255,255,255,.2)',
                    borderColor: 'rgba(255,255,255,.55)',
                    data: [78, 81, 80, 45, 34, 12, 40, 85, 65, 23, 12, 98, 34, 84, 67, 82]
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        display: false,
                        barPercentage: 0.6
                    }],
                    yAxes: [{
                        display: false
                    }]
                }
            }
        }); // eslint-disable-next-line no-unused-vars

        var mainChart = new Chart($('#main-chart'), {
            type: 'line',
            data: {
                labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W', 'T', 'F', 'S', 'S'],
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: hexToRgba(getStyle('--info'), 10),
                    borderColor: getStyle('--info'),
                    pointHoverBackgroundColor: '#fff',
                    borderWidth: 2,
                    data: [165, 180, 70, 69, 77, 57, 125, 165, 172, 91, 173, 138, 155, 89, 50, 161, 65, 163, 160, 103, 114, 185, 125, 196, 183, 64, 137, 95, 112, 175]
                }, {
                    label: 'My Second dataset',
                    backgroundColor: 'transparent',
                    borderColor: getStyle('--success'),
                    pointHoverBackgroundColor: '#fff',
                    borderWidth: 2,
                    data: [92, 97, 80, 100, 86, 97, 83, 98, 87, 98, 93, 83, 87, 98, 96, 84, 91, 97, 88, 86, 94, 86, 95, 91, 98, 91, 92, 80, 83, 82]
                }, {
                    label: 'My Third dataset',
                    backgroundColor: 'transparent',
                    borderColor: getStyle('--danger'),
                    pointHoverBackgroundColor: '#fff',
                    borderWidth: 1,
                    borderDash: [8, 5],
                    data: [65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65]
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            drawOnChartArea: false
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            maxTicksLimit: 5,
                            stepSize: Math.ceil(250 / 5),
                            max: 250
                        }
                    }]
                },
                elements: {
                    point: {
                        radius: 0,
                        hitRadius: 10,
                        hoverRadius: 4,
                        hoverBorderWidth: 3
                    }
                }
            }
        });
        var brandBoxChartLabels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
        var brandBoxChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    display: false
                }],
                yAxes: [{
                    display: false
                }]
            },
            elements: {
                point: {
                    radius: 0,
                    hitRadius: 10,
                    hoverRadius: 4,
                    hoverBorderWidth: 3
                }
            } // eslint-disable-next-line no-unused-vars

        };
        var brandBoxChart1 = new Chart($('#social-box-chart-1'), {
            type: 'line',
            data: {
                labels: brandBoxChartLabels,
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: 'rgba(255,255,255,.1)',
                    borderColor: 'rgba(255,255,255,.55)',
                    pointHoverBackgroundColor: '#fff',
                    borderWidth: 2,
                    data: [65, 59, 84, 84, 51, 55, 40]
                }]
            },
            options: brandBoxChartOptions
        }); // eslint-disable-next-line no-unused-vars

        var brandBoxChart2 = new Chart($('#social-box-chart-2'), {
            type: 'line',
            data: {
                labels: brandBoxChartLabels,
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: 'rgba(255,255,255,.1)',
                    borderColor: 'rgba(255,255,255,.55)',
                    pointHoverBackgroundColor: '#fff',
                    borderWidth: 2,
                    data: [1, 13, 9, 17, 34, 41, 38]
                }]
            },
            options: brandBoxChartOptions
        }); // eslint-disable-next-line no-unused-vars

        var brandBoxChart3 = new Chart($('#social-box-chart-3'), {
            type: 'line',
            data: {
                labels: brandBoxChartLabels,
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: 'rgba(255,255,255,.1)',
                    borderColor: 'rgba(255,255,255,.55)',
                    pointHoverBackgroundColor: '#fff',
                    borderWidth: 2,
                    data: [78, 81, 80, 45, 34, 12, 40]
                }]
            },
            options: brandBoxChartOptions
        }); // eslint-disable-next-line no-unused-vars

        var brandBoxChart4 = new Chart($('#social-box-chart-4'), {
            type: 'line',
            data: {
                labels: brandBoxChartLabels,
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: 'rgba(255,255,255,.1)',
                    borderColor: 'rgba(255,255,255,.55)',
                    pointHoverBackgroundColor: '#fff',
                    borderWidth: 2,
                    data: [35, 23, 56, 22, 97, 23, 64]
                }]
            },
            options: brandBoxChartOptions
        });
        //# sourceMappingURL=main.js.map
    </script>
@endsection
