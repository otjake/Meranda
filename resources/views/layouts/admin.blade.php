<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/adminto/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Aug 2020 22:16:25 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Dashboard | Adminto - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('css/bootstrap.min.css')}}" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <!-- App Css-->
    <link href="{{asset('css/admin_app.min.css')}}" id="app-stylesheet" rel="stylesheet" type="text/css" />

</head>

<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- Topbar Start -->
 @include('includes.admin_nav')
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">
        @include('includes.admin_sidebar')
    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                @include('includes.messages')
                @yield('content')
        </div> <!-- container-fluid -->
        </div>

        @include('includes.admin_footer')

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->



<!-- Vendor js -->
<script src="{{asset('js/vendor.min.js')}}"></script>

<!-- knob plugin -->
<script src="{{asset('libs/jquery-knob/jquery.knob.min.js')}}"></script>

<!--Morris Chart-->
<script src="{{asset('libs/morris-js/morris.min.js')}}"></script>
<script src="{{asset('libs/raphael/raphael.min.js')}}"></script>

<!-- Dashboard init js-->
<script src="{{asset('js/pages/dashboard.init.js')}}"></script>

<!-- App js -->
<script src="{{asset('js/app.min.js')}}"></script>

</body>

</html>
