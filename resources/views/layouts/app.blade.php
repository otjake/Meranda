<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/preview/theme/meranda/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Aug 2020 13:39:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Meranda &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link href="{{asset('css/jquery.mb.YTPlayer.min.css')}}" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<body class="site-wrap">
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<div class="header-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 d-flex">
                <a href="/" class="site-logo">
                    Meranda
                </a>
                <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
            </div>
            <div class="col-12 col-lg-6 ml-auto d-flex">
                <div class="ml-md-auto top-social d-none d-lg-inline-block">
                    <a href="#" class="d-inline-block p-3"><span class="icon-facebook"></span></a>
                    <a href="#" class="d-inline-block p-3"><span class="icon-twitter"></span></a>
                    <a href="#" class="d-inline-block p-3"><span class="icon-instagram"></span></a>
                </div>
                <form action="#" class="search-form d-inline-block">
                    <div class="d-flex">
                        <input type="email" class="form-control" placeholder="Search...">
                        <button type="submit" class="btn btn-secondary"><span class="icon-search"></span></button>
                    </div>
                </form>
            </div>
            <div class="col-6 d-block d-lg-none text-right">
            </div>
        </div>
    </div>
    <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">
        <div class="container">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                            <li class="active">
                                <a href="/" class="nav-link text-left">Home</a>
                            </li>
                            @foreach($menus as $menu)
                                <li>
                                    <a href="/pages/single_menu/{{$menu->id}}" class="nav-link text-left">{{ $menu->menu_title }}</a>
                                </li>

                            @endforeach

                            {{--                                <li>--}}
                            {{--                                    <a href="categories.html" class="nav-link text-left">Politics</a>--}}
                            {{--                                </li>--}}
                            {{--                                <li>--}}
                            {{--                                    <a href="categories.html" class="nav-link text-left">Business</a>--}}
                            {{--                                </li>--}}
                            {{--                                <li>--}}
                            {{--                                    <a href="categories.html" class="nav-link text-left">Health</a>--}}
                            {{--                                </li>--}}
                            {{--                                <li><a href="categories.html" class="nav-link text-left">Design</a></li>--}}
                            {{--                                <li>--}}
                            {{--                                    <a href="categories.html" class="nav-link text-left">Sport</a>--}}
                            {{--                                </li>--}}
                            {{--                                <li><a href="contact.html" class="nav-link text-left">Contact</a></li>--}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('content')

@yield('footer')

<script src="{{asset('js/jquery-3.4.1.js')}}" type="text/javascript"></script>

<script src="{{asset('js/owl.carousel.min.js')}}" type="text/javascript"></script>

<script src="{{asset('js/aos.js')}}" type="text/javascript"></script>

<script src="{{asset('js/main.js')}}" type="text/javascript"></script>
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>

@yield('scripts')

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="166617ea582e39e4552d3b9a-text/javascript"></script>
{{--<script type="166617ea582e39e4552d3b9a-text/javascript">--}}
{{--  window.dataLayer = window.dataLayer || [];--}}
{{--  function gtag(){dataLayer.push(arguments);}--}}
{{--  gtag('js', new Date());--}}

{{--  gtag('config', 'UA-23581568-13');--}}
{{--</script>--}}
<script src="{{asset('js/rocket-loader.min.js')}}" data-cf-settings="166617ea582e39e4552d3b9a-|49" defer=""></script>

</body>
</html>
