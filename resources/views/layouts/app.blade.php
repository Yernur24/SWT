{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <!-- CSRF Token -->--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--    <!-- Fonts -->--}}
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">--}}

{{--    <!-- Scripts -->--}}
{{--    @vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="app">--}}
{{--    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--        <div class="container">--}}
{{--            <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                {{ config('app.name', 'Laravel') }}--}}
{{--            </a>--}}
{{--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}

{{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                <!-- Left Side Of Navbar -->--}}
{{--                <ul class="navbar-nav me-auto">--}}

{{--                </ul>--}}

{{--                <!-- Right Side Of Navbar -->--}}
{{--                <ul class="navbar-nav ms-auto">--}}
{{--                    <!-- Authentication Links -->--}}
{{--                    @guest--}}
{{--                        @if (Route::has('login'))--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                            </li>--}}
{{--                        @endif--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                            </li>--}}
{{--                        @endif--}}
{{--                    @else--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                {{ Auth::user()->name }}--}}
{{--                            </a>--}}

{{--                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                   onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                    {{ __('Logout') }}--}}
{{--                                </a>--}}

{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    @endguest--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--    @if ($errors->any())--}}
{{--        <div class="alert alert-danger">--}}
{{--            <ul>--}}
{{--                @foreach ($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}
{{--    @if (session('message'))--}}
{{--        <div class="alert alert-success" role="alert">--}}
{{--            {{ session('message') }}--}}
{{--        </div>--}}
{{--    @endif--}}
{{--    <main class="py-4">--}}
{{--        @yield('content')--}}
{{--    </main>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
    <!DOCTYPE html>
<html lang="en">

<head>
    <title>Home 1</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontello-codes.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontello-embedded.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontello-ie7-codes.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontello-ie7.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontello.css')}}">
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/Pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles_Ecommerce.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>

<body>
<!-- header -->
<header class="header ">
    <div class="header-top clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-3 item-logo">
                    <a href="Home_01.html"><img src="{{asset('images/Home_02/logo.png')}}" alt=""></a>
                </div>
                <div class="col-md-6">
                    <div class="header-main">
                        <ul class="level1 level1_h1">
                            <li class="level11">
                                <a href="#">home</a>
                                <ul class="hover-blog">
                                    <li><a href="Home_01.html">Home 01</a></li>
                                    <li><a href="Home_02.html">Home 02</a></li>

                                </ul>
                            </li>
                            <li class="level11">
                                <a href="#">Product</a>
                                <ul class="hover-blog">
                                    <li><a href="Product3_Columns.html">Product</a></li>
                                    <li><a href="Details_Product2.html">Details Product</a></li>
                                </ul>
                            </li>

                            <li class="level11">
                                <a href="#">blog</a>
                                <ul class="hover-blog">
                                    <li><a href="Blog3.html">Blog3</a></li>
                                    <li><a href="Blog4.html">Blog4</a></li>
                                    <li><a href="Blog_sidebar_left.html">Blog sidebar left</a></li>
                                    <li><a href="Blog_sidebar_right.html">Blog sidebar right</a></li>
                                </ul>
                            </li>
                            <li class="level11">
                                <a href="#">Pages</a>
                                <ul class="hover-blog">
                                    <li><a href="About_us.html">About us</a></li>
                                    <li><a href="Chect_out.html">Check out</a></li>
                                    <li><a href="Comming_soon_page.html">Comming soon page</a></li>
                                    <li><a href="Contact_us.html">Contact us</a></li>
                                    <li><a href="Your_cart.html">Your cart</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 icon-header-right item-icon">
                    <ul>
                        <li class="hover-search">
                            <a class="click-search js-click-search" href="javascript:void(0)"><span class="pe-7s-search"></span></a>
                            <form class="menubar-search-form">
                                <input class="form-control" type="search" placeholder="Search ....">
                            </form>
                        </li>
                        <li class="hover-cart-user"><a class="click-hover-user" href="#"><span class="pe-7s-user"></span></a>
                            <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else

                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </li>
                        <li class="hover-cart-user">
                            <a class="hover-icon-cart" href="Your_cart.html">
                                <span class="icon icon-ecommerce-basket"></span>
                                <p>01</p>
                            </a>
                            <div class="submenu mini-cart">
                                <h4 class="account">02 item</h4>
                                <div class="product">
                                    <div class="item clearfix">
                                        <div class="img-prd">
                                            <img class="img-responsive" src="{{asset('images/product-bag1.png')}}" alt="">
                                        </div>
                                        <div class="title">
                                            <h4 class="product-name"><a href="#">One shoulder bow top</a></h4>
                                            <div class="product-price">
                                                <p>$300</p>
                                                <del>$250</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item clearfix">
                                        <div class="img-prd">
                                            <img class="img-responsive" src="{{asset('images/product-bag2.png')}}" alt="">
                                        </div>
                                        <div class="title">
                                            <h4 class="product-name"><a href="#">One shoulder bow top</a></h4>
                                            <div class="product-price">
                                                <p>$300</p>
                                                <del>$250</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-cart-total">
                                    <div class="list-money">
                                        <label>price:</label>
                                        <span class="money">$160.00</span>
                                    </div>
                                    <div class="list-money">
                                        <label>shipping:</label>
                                        <span class="money">$10.00</span>
                                    </div>
                                    <div class="list-money">
                                        <label>total:</label>
                                        <span class="money">$170.00</span>
                                    </div>
                                </div>
                                <div class="actions">
                                    <a class="btn-checkout" href="Chect_out.html">Checkout</a>
                                    <a class="btn-cart" href="#">View cart</a>
                                </div>
                            </div>
                        </li>
                        <li class="btn-navbar-menu">
                            <a href="#"><span class="pe-7s-config"></span></a>
                            <div class="hover-menu-icon">
                                <div class="list-menu">
                                    <h4>account</h4>
                                    <ul>
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#">Register</a></li>
                                        <li><a href="#">Wishlist</a></li>
                                        <li><a href="#">Compare</a></li>
                                    </ul>
                                </div>
                                <div class="list-menu">
                                    <h4>currencies</h4>
                                    <ul>
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">EUR</a></li>
                                        <li><a href="#">GBP</a></li>
                                    </ul>
                                </div>
                                <div class="list-menu">
                                    <h4>languages</h4>
                                    <ul>
                                        <li><a href="#">ENGLISH</a></li>
                                        <li><a href="#">FRENCH</a></li>
                                        <li><a href="#">SPANISH</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mobi">
        <div class="container-fluid">
            <div class="icon-hd-mb">
                <ul class="icon-hd-mb-left">
                    <li>
                        <a href="javascript:void(0)" class="js-click-user"><span class="pe-7s-user"></span></a>
                        <ul class="submenu_user">
                            <li>
                                <a href="/account" title="">Login</a>
                            </li>
                            <li>
                                <a href="/account/register" title="">Register</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="js-click-cart"><span class="icon icon-ecommerce-basket"></span></a>
                        <div class="submenu mini-cart overlay">
                            <a href="javascript:void(0)" class="closebtn">&times;</a>
                            <div class="overlay-content">
                                <h4 class="account">02 item</h4>
                                <div class="product">
                                    <div class="item clearfix">
                                        <div class="img-prd">
                                            <img class="img-responsive" src="{{asset('images/product-bag1.png')}}" alt="">
                                        </div>
                                        <div class="title">
                                            <h4 class="product-name"><a href="#">One shoulder bow top</a></h4>
                                            <div class="product-price">
                                                <p>$300</p>
                                                <del>$250</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-cart-total">
                                    <div class="list-money">
                                        <label>price:</label>
                                        <span class="money">$160.00</span>
                                    </div>
                                    <div class="list-money">
                                        <label>shipping:</label>
                                        <span class="money">$10.00</span>
                                    </div>
                                    <div class="list-money">
                                        <label>total:</label>
                                        <span class="money">$170.00</span>
                                    </div>
                                </div>
                                <div class="actions">
                                    <a class="btn-checkout" href="#">Checkout</a>
                                    <a class="btn-cart" href="#">View cart</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="js-click-config"><span class="pe-7s-config"></span></a>
                        <div class="hover-menu-icon sidenav" id="mySidenav">
                            <a href="javascript:void(0)" class="close">&times;</a>
                            <div class="list-menu">
                                <h4>account</h4>
                                <ul>
                                    <li><a href="#">- Login</a></li>
                                    <li><a href="#">- Register</a></li>
                                    <li><a href="#">- Wishlist</a></li>
                                    <li><a href="#">- Compare</a></li>
                                </ul>
                            </div>
                            <div class="list-menu">
                                <h4>currencies</h4>
                                <ul>
                                    <li><a href="#">- USD</a></li>
                                    <li><a href="#">- EUR</a></li>
                                    <li><a href="#">- GBP</a></li>
                                </ul>
                            </div>
                            <div class="list-menu">
                                <h4>languages</h4>
                                <ul>
                                    <li><a href="#">- ENGLISH</a></li>
                                    <li><a href="#">- FRENCH</a></li>
                                    <li><a href="#">- SPANISH</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="icon-hd-mb-right">
                    <li class="search">
                        <a class="click-search js-click-search-mobi" href="javascript:void(0)"><span class="pe-7s-search"></span></a>
                        <form class="menubar-search-form">
                            <input class="btn btn-sm btn-white" placeholder="Search ....">
                            <button type="button" class="btn btn-sm btn-white close-search-form">
                                <span class="pe-7s-close"></span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="lg-hd clearfix">
                <div class="col-sm-8 col-xs-8"><a href="#"><img src="{{asset('images/Home_02/logo.png')}}" alt=""></a></div>
                <div class="col-sm-4 col-xs-4 img-bar">
                    <ul>
                        <li class="btn-navbar"><img src="{{asset('images/bar.png')}}" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<a class="btn btn-primary" href="{{route('adm.users.index')}}">Admin Panel</a>
<!-- end/header -->
<!-- slideshow -->
<section class="slideshow">
    <div class="container-fluid">
        <div class="js-slideshow">
            <div class="item">
                <div class="img-sl">
                    <img class="img-responsive" src="{{asset('images/Home_01/main1.jpg')}}" alt="">
                    <div class="title tt-center">
                        <span class="style">#style2017</span>
                        <h3>new arrivals</h3>
                        <p>It has roots in a piece of classical Latin literature from 45 BC.</p>
{{--                        <button class="btnn">expore now</button>--}}
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img-sl">
                    <img class="img-responsive" style="height: 700px; width: 1730px;" src="{{asset('images/Home_01/main3.jpg')}}" alt="">
                    <div style="color: white" class="title tt-left">
                        <span class="style">#traveling</span>
                        <h3>Take action</h3>
                        <p>It has roots in a piece of classical Latin literature from 45 BC.</p>
{{--                        <button class="btnn">expore now</button>--}}
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="img-sl">
                    <img class="img-responsive" style="height: 700px; width: 1730px; src="{{asset('images/Home_01/slideshow3.png')}}" alt="">
                    <div class="title tt-right">
                        <span class="style">#menstyle</span>
                        <h3>New feeling</h3>
                        <p>It has roots in a piece of classical Latin literature from 45 BC.</p>
{{--                        <button class="btnn">expore now</button>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- end/slideshow -->
<!-- banner_v1 -->
<section class="banner_v1">
    <span class="title">Welcome to <img src="{{asset('images/Home_01/logo-banner.png')}}" alt="" class="img-responsive"> fashion!</span>
    <div class="container">
        <div class="row">
            <div class="img-banner clearfix">
                <div class="item item-l-r">
                    <div class="img-bn"><img src="{{asset('images/Home_01/Banner1_v1_Home1.png')}}" alt="" class="img-responsive"></div>
                    <div class="title">
                        <button class="btnn">#newdenim</button>
                    </div>
                </div>
                <div class="item item-center">
                    <div class="img-bn"><img src="{{asset('images/Home_01/Banner2_v1_Home1.png')}}" alt="" class="img-responsive"></div>
                    <div class="title">
                        <h3>Get 70%</h3>
                        <p>Assical Latin literature from 45 BC.</p>
                        <span>expore now</span>
                    </div>
                </div>
                <div class="item item-l-r">
                    <div class="img-bn"><img src="{{asset('/images/Home_01/Banner3_v1_Home1.png')}}" alt="" class="img-responsive"></div>
                    <div class="title">
                        <button class="btnn">#lookbook17</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end/banner_v1 -->
<!-- product -->
@yield('content')
<!-- end/product -->
<!-- testimonial -->
<div class="testimonial">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-2"></div>
            <div class="col-md-6 offset-md-1 col-sm-12">
                <div class="slider">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-12">
                            <div class="slider__show">
                                <div class="item" data-name="Hailie" data-position="#Photographer" data-desc="&ldquo;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock a Latin professor at Hampden-Sydney College in Virginia... &rdquo;">
                                    <img src="{{asset('images/Home_02/Testimonial1_home2.png')}}" alt="avt">
                                </div>
                                <div class="item" data-name="Hailie" data-position="#Photographer" data-desc="&ldquo;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock a Latin professor at Hampden-Sydney College in Virginia... &rdquo;">
                                    <img src="{{asset('images/Home_02/Testimonial2_home2.png')}}" alt="avt">
                                </div>
                                <div class="item" data-name="Hailie" data-position="#Photographer" data-desc="&ldquo;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock a Latin professor at Hampden-Sydney College in Virginia... &rdquo;">
                                    <img src="{{asset('images/Home_02/Testimonial3_home2.png')}}" alt="avt">
                                </div>
                                <div class="item" data-name="Hailie" data-position="#Photographer" data-desc="&ldquo;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock a Latin professor at Hampden-Sydney College in Virginia... &rdquo;">
                                    <img src="{{asset('images/Home_02/Testimonial1_home2.png')}}" alt="avt">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__meta">
                        <p class="desc"></p>
                        <p class="name"></p>
                        <p class="position"></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-2"></div>
        </div>
    </div>
</div>
<!-- end/testimonial -->
<!-- blog -->
<section class="blog">
    <div class="title-top">
        <h3>our blog</h3>
        <p>Contrary to popular belief, Lorem Ipsum is not simply
            <br> random text. It has roots in a piece of classical Latin literature from 45 BC</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="item-blog">
                    <div class="img-blog">
                        <!-- <span class="first"></span>
                    <span class="last"></span> -->
                        <a href="#"><img src="{{asset('images/Home_01/Blog1_Home1.png')}}" alt="" class="img-responsive"></a>
                    </div>
                    <div class="text-blog">
                        <a href="#">More than denim & Fall winter 2017</a>
                        <p>By Halie / August 16, 2017</p>
                        <p class="content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item-blog">
                    <div class="img-blog">
                        <!-- <span class="first"></span>
                    <span class="last"></span> -->
                        <a href="#"> <img src="{{asset('images/Home_01/Blog2_Home1.png')}}" alt="" class="img-responsive"></a>
                    </div>
                    <div class="text-blog">
                        <a href="#">More than denim & Fall winter 2017</a>
                        <p>By Halie / August 16, 2017</p>
                        <p class="content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item-blog">
                    <div class="img-blog">
                        <!-- <span class="first"></span>
                    <span class="last"></span> -->
                        <a href="#"><img src="{{asset('images/Home_01/Blog3_Home1.png')}}" alt="" class="img-responsive"></a>
                    </div>
                    <div class="text-blog">
                        <a href="#">More than denim & Fall winter 2017</a>
                        <p>By Halie / August 16, 2017</p>
                        <p class="content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end/blog -->
<!-- footer -->
<footer class="footerv1">
    <div class="content">
        <h3>Newsletter</h3>
        <form class="mb-35">
            <input name="EMAIL" type="email" placeholder="Enter your e-mail" value="">
            <i class="fa fa-paper-plane "></i>
        </form>
        <ul>
            <li><a href="#">Help</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Shops</a></li>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Orders</a></li>
            <li><a href="#">Returns</a></li>
            <li><a href="#">Gift Vouncher</a></li>
            <li><a href="#">Company</a></li>
            <li><a href="#">Recruitment</a></li>
            <li><a href="#">FAQs</a></li>
        </ul>
        <div class="iconft">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-tumblr"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
        <span>Hotline: 001-888-8888</span>
    </div>
</footer>
<!-- end/footer -->
<!-- menu-mobile -->
<div class="off-canvas-nav">
    <div class="off-canvas-header">
        <span class="remove-menumobile pe-7s-close"></span>
        <img src="{{asset('images/Home_01/logo.png')}}" class="custom-logo" alt="Logo">
    </div>
    <div class="noo-main-canvas">
        <ul id="menu-main-menu" class="nav-collapse navbar-nav">
            <li class="noo-menu">
                <a href="#">Home</a>
                <ul class="sub-menu">
                    <li><a href="Home_01.html">Home 01</a></li>
                    <li><a href="Home_02.html">Home 02</a></li>
                    <li><a href="Home_03.html">Home 03</a></li>
                </ul>
                <i class="fa noo-sub-icon fa-caret-down"></i>
            </li>
            <li class="noo-menu">
                <a href="#">Shop</a>
                <ul class="sub-menu">
                    <li><a href="Product3_Columns.html">Product3 Columns</a></li>
                    <li><a href="Product4_Columns.html">Product4 Columns</a></li>
                    <li><a href="Product5_Columns.html">Product5 Columns</a></li>
                    <li><a href="Product_left_shidebar.html">Product Left Sidebar</a></li>
                    <li><a href="Product_right_shidebar.html">Product Right Sidebar</a></li>
                    <li><a href="Details_Product1.html">Details Product1</a></li>
                    <li><a href="Details_Product2.html">Details Product2</a></li>
                </ul>
                <i class="fa fa-caret-down noo-sub-icon"></i>
            </li>
            <li class="noo-menu">
                <a href="Product3_Columns.html">Womens</a>
            </li>
            <li id="menu-item-895" class="noo-menu"><a href="#">Mens</a>
                <ul class="sub-menu">
                    <li><a href="#">T-shirt</a></li>
                    <li><a href="#">Coat cold</a></li>
                    <li><a href="#">Jeans</a></li>
                    <li><a href="#">Bracelet</a></li>
                    <li><a href="#">Hand bag</a></li>
                    <li><a href="#">Choker</a></li>
                </ul>
                <i class="fa fa-caret-down noo-sub-icon"></i></li>
            <li class="noo-menu"><a href="#">Lookbook</a></li>
            <li class="noo-menu">
                <a href="#">Blog</a>
                <ul class="sub-menu">
                    <li><a href="Blog3.html">Blog3</a></li>
                    <li><a href="Blog4.html">Blog4</a></li>
                    <li><a href="Blog_sidebar_left.html">Blog sidebar left</a></li>
                    <li><a href="Blog_sidebar_right.html">Blog sidebar right</a></li>
                </ul>
                <i class="fa fa-caret-down noo-sub-icon"></i>
            </li>
            <li class="noo-menu">
                <a href="#">Pages</a>
                <ul class="sub-menu">
                    <li><a href="About_us.html">About us</a></li>
                    <li><a href="Chect_out.html">Check out</a></li>
                    <li><a href="Comming_soon_page.html">Comming soon page</a></li>
                    <li><a href="Contact_us.html">Contact us</a></li>
                    <li><a href="Your_cart.html">Your cart</a></li>
                </ul>
                <i class="fa fa-caret-down noo-sub-icon"></i>
            </li>
        </ul>
    </div>
</div>
<!-- end/menu-mobile -->
<!-- LOAD JQUERY -->
<script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/select.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('js/bootstrap-slider.min.js')}}"></script>
<!-- Custom jQuery -->
<script src="{{asset('js/main.js')}}"></script>
</body>

</html>

