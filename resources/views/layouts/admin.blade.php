<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Agribizcenter">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CoreUI-Laravel</title>

<!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">

@include('includes.admin_header')
<div class="app-body">
{{--    @include('includes.admin_sidebar')--}}
{{--    <main class="main">--}}
{{--        @include('includes.admin_breadcrumb')--}}
{{--        @yield('content')--}}
{{--    </main>--}}
</div>
{{--@include('includes.admin_footer')--}}

<!-- Scripts -->
<script src="{{ asset('js/admin_app.js') }}"></script>
<script src="{{ asset('js/custom-tooltips.js') }}"></script>

@yield('scripts')
</body>
</html>
