<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="{{asset('assets/images/favicon/12.png')}}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{asset('assets/images/favicon/12.png')}}" type="image/x-icon"/>
    <title>A1Moda | @yield('title')</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome.css')}}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick-theme.css')}}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}/">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify.css')}}/">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color8.css')}}" media="screen" id="color">

</head>
<body class="rtl">


<!-- pre-loader start -->
<div class="loader-wrapper">
    <div class="loader"></div>
</div>
<!-- pre-loader end -->


<!-- header start -->
<header>
    <div class="mobile-fix-option"></div>
    <div class="top-header top-header-dark2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact">
                        <ul>
                            <li class="onhover-dropdown mobile-account">
                                 اللغات
                                <ul class="onhover-show-div">
                                    <li>
                                        <a href="/AR" data-lng="ar">
                                            العربية
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/" data-lng="en">
                                            English
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/DU" data-lng="du">
                                            Dutch
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us:  123 - 456 - 7890</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 text-right">
                    <ul class="header-dropdown">
                        <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> wishlist</a></li>
                        <li class="onhover-dropdown mobile-account">
                            <i class="fa fa-user" aria-hidden="true"></i> My Account
                            <ul class="onhover-show-div">
                                <li>
                                    <a href="#" data-lng="en">
                                        Login
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-lng="es">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container layout3-menu">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-menu row">
                    <div class="col">
                        <div class="menu-left around-border">
                            <div class="navbar">
                                <a href="#" onclick="openNav()" >
                                    <i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                </a>
                                <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                                    <nav>
                                        <a href="javascript:void(0)"  onclick="closeNav()">
                                            <div class="sidebar-back text-left">
                                                <i class="fa fa-angle-left pr-2" aria-hidden="true"></i> Back
                                            </div>
                                        </a>
                                        <!-- Sample menu definition -->
                                        <ul id="sub-menu" class="sm pixelstrap sm-vertical ">
                                            <li><a href="#">clothing</a>
                                                <ul class="mega-menu clothing-menu">
                                                    <li>
                                                        <div class="row m-0">
                                                            <div class="col-xl-4">
                                                                <div class="link-section">
                                                                    <h5>women's fashion</h5>
                                                                    <ul>
                                                                        <li><a href="#">dresses</a></li>
                                                                        <li><a href="#">skirts</a></li>
                                                                        <li><a href="#">westarn wear</a></li>
                                                                        <li><a href="#">ethic wear</a></li>
                                                                        <li><a href="#">sport wear</a></li>
                                                                    </ul>
                                                                    <h5>men's fashion</h5>
                                                                    <ul>
                                                                        <li><a href="#">sports wear</a></li>
                                                                        <li><a href="#">western wear</a></li>
                                                                        <li><a href="#">ethic wear</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="link-section">
                                                                    <h5>accessories</h5>
                                                                    <ul>
                                                                        <li><a href="#">fashion jewellery</a></li>
                                                                        <li><a href="#">caps and hats</a></li>
                                                                        <li><a href="#">precious jewellery</a></li>
                                                                        <li><a href="#">necklaces</a></li>
                                                                        <li><a href="#">earrings</a></li>
                                                                        <li><a href="#">wrist wear</a></li>
                                                                        <li><a href="#">ties</a></li>
                                                                        <li><a href="#">cufflinks</a></li>
                                                                        <li><a href="#">pockets squares</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <a href="{{route('home')}}" class="mega-menu-banner"> <img src="assets/images/mega-menu/fashion.jpg" alt="" class="img-fluid"></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">bags</a>
                                                <ul>
                                                    <li><a href="#">shopper bags</a></li>
                                                    <li><a href="#">laptop bags</a></li>
                                                    <li><a href="#">clutches</a></li>
                                                    <li><a href="#">purses</a>
                                                        <ul>
                                                            <li><a href="#">purses</a></li>
                                                            <li><a href="#">wallets</a></li>
                                                            <li><a href="#">leathers</a></li>
                                                            <li><a href="#">satchels</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">footwear</a>
                                                <ul>
                                                    <li><a href="#">sport shoes</a></li>
                                                    <li><a href="#">formal shoes</a></li>
                                                    <li><a href="#">casual shoes</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">watches</a>
                                            </li>
                                            <li><a href="#">Accessories</a>
                                                <ul>
                                                    <li><a href="#">fashion jewellery</a></li>
                                                    <li><a href="#">caps and hats</a></li>
                                                    <li><a href="#">precious jewellery</a></li>
                                                    <li><a href="#">more..</a>
                                                        <ul>
                                                            <li><a href="#">necklaces</a></li>
                                                            <li><a href="#">earrings</a></li>
                                                            <li><a href="#">wrist wear</a></li>
                                                            <li><a href="#">accessories</a>
                                                                <ul>
                                                                    <li><a href="#">ties</a></li>
                                                                    <li><a href="#">cufflinks</a></li>
                                                                    <li><a href="#">pockets squares</a></li>
                                                                    <li><a href="#">helmets</a></li>
                                                                    <li><a href="#">scarves</a></li>
                                                                    <li><a href="#">more...</a>
                                                                        <ul>
                                                                            <li><a href="#">accessory gift sets</a></li>
                                                                            <li><a href="#">travel accessories</a></li>
                                                                            <li><a href="#">phone cases</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">belts & more</a></li>
                                                            <li><a href="#">wearable</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">house of design</a>
                                            </li>
                                            <li><a href="#">beauty & personal care</a>
                                                <ul>
                                                    <li><a href="#">makeup</a></li>
                                                    <li><a href="#">skincare</a></li>
                                                    <li><a href="#">premium beaty</a></li>
                                                    <li><a href="#">more</a>
                                                        <ul>
                                                            <li><a href="#">fragrances</a></li>
                                                            <li><a href="#">luxury beauty</a></li>
                                                            <li><a href="#">hair care</a></li>
                                                            <li><a href="#">tools & brushes</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">home & decor</a>
                                            </li>
                                            <li><a href="#">kitchen</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>

                            </div>
                            <div class="main-menu-right">
                                <nav id="main-nav">
                                    <div class="toggle-nav">
                                        <i class="fa fa-bars sidebar-bar"></i>
                                    </div>
                                    <!-- Sample menu definition -->
                                    <ul id="main-menu" class="sm sm-rtl pixelstrap sm-horizontal light-font-menu">
                                        <li >
                                            <div class="mobile-back text-right">
                                                Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i>
                                            </div>
                                        </li>
                                        <li class="mega"><a href="#">Home</a>
                                            <ul class="mega-menu  home-menu">
                                                <li>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-6 mega-box">
                                                                <div class="link-section">
                                                                    <div class="demo">
                                                                        <ul>
                                                                            <li><a target="_blank" href="index-2.html"><span>fashion 01<img src="assets/images/demo-img/1.png" alt=""></span></a></li>
                                                                            <li><a target="_blank" href="fashion-2.html"><span>fashion 02<img src="assets/images/demo-img/2.png" alt=""></span></a></li>
                                                                            <li><a target="_blank" href="fashion-3.html"><span>fashion 03<img src="assets/images/demo-img/3.png" alt=""></span></a></li>
                                                                            <li><a target="_blank" href="shoes.html"><span>shoes<img src="assets/images/demo-img/4.png" alt=""></span></a></li>
                                                                            <li><a target="_blank" href="bags.html"><span>bag<img src="assets/images/demo-img/5.png" alt=""></span></a></li>
                                                                            <li><a target="_blank" href="watch.html"><span>watch<img src="assets/images/demo-img/6.png" alt=""></span></a></li>
                                                                            <li><a target="_blank" href="kids.html"><span>kids<img src="assets/images/demo-img/7.png" alt=""></span></a></li>
                                                                            <li><a target="_blank" href="flower.html"><span>flower<img src="assets/images/demo-img/8.png" alt=""></span></a></li>
                                                                            <li><a target="_blank" href="nursery.html"><span>nursery<img src="assets/images/demo-img/9.png" alt=""></span></a></li>
                                                                            <li><a target="_blank" href="vegetables.html"><span>vegetable<img src="assets/images/demo-img/10.png" alt=""></span></a></li>
                                                                            <li><a target="_blank" href="beauty.html"><span>beauty products<img src="assets/images/demo-img/11.png" alt=""></span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 mega-box">
                                                                <div class="link-section">
                                                                    <div class="demo">
                                                                        <ul>
                                                                            <li><a target="_blank" href="instagram-shop.html"><span>instagram shop<img src="assets/images/demo-img/12.png" alt=""></span></a></li>
                                                                            <li><a target="_blank" href="lookbook-demo.html"><span>lookbook<img src="assets/images/demo-img/13.png" alt=""></span></a></li>
                                                                            <li><a target="_blank" href="light.html"><span>light<img src="assets/images/demo-img/14.png" alt=""></span></a></li>
                                                                            <li><a target="_blank" href="full-page.html"><span>full page<img src="assets/images/demo-img/15.png" alt=""></span></a></li>
                                                                            <li><a target="_blank" href="electronic-1.html"><span>electronics 01<img src="assets/images/demo-img/16.png" alt=""></span></a></li>
                                                                            <li><a target="_blank" href="electronic-2.html"><span>electronics 02<img src="assets/images/demo-img/17.png" alt=""></span></a></li>
                                                                            <li><a target="_blank" href="video.html"><span>video<img src="assets/images/demo-img/18.png" alt=""></span></a></li>
                                                                            <li><a target="_blank" href="goggles.html"><span>goggles<img src="assets/images/demo-img/19.png" alt=""></span></a></li>
                                                                            <li><a target="_blank" href="parallax.html"><span>parallax<img src="assets/images/demo-img/20.png" alt=""></span></a></li>
                                                                            <li><a target="_blank" href="furniture.html"><span>furniture<img src="assets/images/demo-img/21.png" alt=""></span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega"><a href="#">features
                                                <div class="lable-nav">new</div>
                                            </a>
                                            <ul class="mega-menu feature-menu">
                                                <li>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-4">
                                                                <a href="blog(right-sidebar).html">
                                                                    <img src="assets/images/feature/blog(right-sidebar).jpg" alt="">
                                                                    <h6>blog(right-sidebar)</h6>
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <a href="blog-details.html">
                                                                    <img src="assets/images/feature/blog-detail.jpg" alt="">
                                                                    <h6>blog detail</h6>
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <a href="blog-page.html">
                                                                    <img src="assets/images/feature/blog-page.jpg" alt="">
                                                                    <h6>blog page</h6>
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <a href="category-page.html">
                                                                    <img src="assets/images/feature/category-page.jpg" alt="">
                                                                    <h6>category</h6>
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <a href="category-page(no-sidebar).html">
                                                                    <img src="assets/images/feature/category-page(no-sidebar).jpg" alt="">
                                                                    <h6>category(no sidebar)</h6>
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <a href="category-page(right).html">
                                                                    <img src="assets/images/feature/category-page(right).jpg" alt="">
                                                                    <h6>category(right)</h6>
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <a href="category-page(sidebar-popup).html">
                                                                    <img src="assets/images/feature/category-page(sidebar-popup).jpg" alt="">
                                                                    <h6>category(popup)</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega"><a href="#">products</a>
                                            <ul class="mega-menu feature-menu product-menu">
                                                <li>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-3">
                                                                <a href="product-page.html">
                                                                    <img src="assets/images/feature/product-page(left-sidebar).jpg" alt="">
                                                                    <h6>left sidebar</h6>
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <a href="/product/مانطو_رجالي_طويل">
                                                                    <img src="assets/images/feature/product-page(right-sidebar).jpg" alt="">
                                                                    <h6>right sidebar</h6>
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <a href="product-page(no-sidebar).html">
                                                                    <img src="assets/images/feature/product-page(no-sidebar).jpg" alt="">
                                                                    <h6>no sidebar</h6>
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <a href="product-page(3-col-left).html">
                                                                    <img src="assets/images/feature/product-page(3-col-left).jpg" alt="">
                                                                    <h6>3 col-thumbnail left</h6>
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <a href="product-page(3-col-right).html">
                                                                    <img src="assets/images/feature/product-page(3-col-right).jpg" alt="">
                                                                    <h6>3 col-thumbnail right</h6>
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <a href="product-page(3-column).html">
                                                                    <img src="assets/images/feature/product-page(3-column).jpg" alt="">
                                                                    <h6>thumbnail below</h6>
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <a href="product-page(accordian).html">
                                                                    <img src="assets/images/feature/product-page(accordian).jpg" alt="">
                                                                    <h6>accordian details</h6>
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <a href="product-page(full-page).html">
                                                                    <img src="assets/images/feature/product-page(full-page).jpg" alt="">
                                                                    <h6>full page product</h6>
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <a href="product-page(left-image).html">
                                                                    <img src="assets/images/feature/product-page(left-image).jpg" alt="">
                                                                    <h6>thumbnail left</h6>
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <a href="product-page(right-image).html">
                                                                    <img src="assets/images/feature/product-page(right-image).jpg" alt="">
                                                                    <h6>thumbnail-right</h6>
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <a href="product-page(sticky).html">
                                                                    <img src="assets/images/feature/product-page(sticky).jpg" alt="">
                                                                    <h6>image sticky</h6>
                                                                </a>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <a href="product-page(vertical-tab).html">
                                                                    <img src="assets/images/feature/product-page(vertical-tab).jpg" alt="">
                                                                    <h6>vertical tab</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega"><a href="#">shop</a>
                                            <ul class="mega-menu full-mega-menu layout-3">
                                                <li>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title"><h5>mens's fashion</h5></div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="#">sports wear</a></li>
                                                                            <li><a href="#">top</a></li>
                                                                            <li><a href="#">bottom</a></li>
                                                                            <li><a href="#">ethic wear</a></li>
                                                                            <li><a href="#">sports wear</a></li>
                                                                            <li><a href="#">shirts</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title"><h5>women's fashion</h5></div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="#">dresses</a></li>
                                                                            <li><a href="#">skirts</a></li>
                                                                            <li><a href="#">westarn wear</a></li>
                                                                            <li><a href="#">ethic wear</a></li>
                                                                            <li><a href="#">sport wear</a></li>
                                                                            <li><a href="#">bottom wear</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title"><h5>kids's fashion</h5></div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="#">sports wear</a></li>
                                                                            <li><a href="#">ethic wear</a></li>
                                                                            <li><a href="#">sports wear</a></li>
                                                                            <li><a href="#">top</a></li>
                                                                            <li><a href="#">bottom</a></li>
                                                                            <li><a href="#">ethic wear</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title"><h5>Accessories</h5></div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="#">fashion jewellery</a></li>
                                                                            <li><a href="#">caps and hats</a></li>
                                                                            <li><a href="#">precious jewellery</a></li>
                                                                            <li><a href="#">necklaces</a></li>
                                                                            <li><a href="#">earrings</a></li>
                                                                            <li><a href="#">wrist wear</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title"><h5>men's accessories</h5></div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="#">ties</a></li>
                                                                            <li><a href="#">cufflinks</a></li>
                                                                            <li><a href="#">pockets squares</a></li>
                                                                            <li><a href="#">helmets</a></li>
                                                                            <li><a href="#">scarves</a></li>
                                                                            <li><a href="#">phone cases</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row banner-padding">
                                                        <div class="col-xl-6">
                                                            <a href="#" class="mega-menu-banner"> <img src="assets/images/mega-menu/1.jpg" class="img-fluid d-none d-xl-block " alt=""></a>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <a href="#" class="mega-menu-banner"><img src="assets/images/mega-menu/2.jpg" class="img-fluid d-none d-xl-block" alt=""></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages</a>
                                            <ul>
                                                <li><a href="about-page.html">about us</a></li>
                                                <li><a href="404.html">404</a></li>
                                                <li><a href="lookbook.html">lookbook</a></li>
                                                <li><a href="login.html">login</a></li>
                                                <li><a href="register.html">register</a></li>
                                                <li><a href="search.html">search</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="collection.html">collection</a></li>
                                                <li><a href="forget_pwd.html">forget password</a></li>
                                                <li><a href="contact.html">contact</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="compare.html">compare</a></li>
                                                <li><a href="order-success.html">order success</a></li>
                                                <li><a href="dashboard.html">Dashboard</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div></div>
                    <div class="col-2">
                        <div class="brand-logo">
                            <a href="/"><img alt="" src="assets/images/icon/logo/12.png"></a>
                        </div></div>
                    <div class="col">
                        <div class="menu-right pull-right">
                            <div>
                                <div class="icon-nav">
                                    <ul>
                                        <li class="onhover-div mobile-search">
                                            <div><img alt="" src="assets/images/icon/layout4/search.png" onclick="openSearch()" class="img-fluid">
                                                <i class="icon-search" onclick="openSearch()" ></i></div>
                                            <div id="search-overlay" class="search-overlay">
                                                <div>
                                                    <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                                    <div class="overlay-content">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <form>
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product">
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="onhover-div mobile-setting">
                                            <div><img alt="" src="assets/images/icon/layout4/setting.png" class="img-fluid">
                                                <i class="icon-settings"></i></div>
                                            <div class="show-div setting">
                                                <h6>language</h6>
                                                <ul>
                                                    <li><a href="#">english</a> </li>
                                                    <li><a href="#">french</a> </li>
                                                </ul>
                                                <h6>currency</h6>
                                                <ul class="list-inline">
                                                    <li><a href="#">euro</a> </li>
                                                    <li><a href="#">rupees</a> </li>
                                                    <li><a href="#">pound</a> </li>
                                                    <li><a href="#">doller</a> </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li  class="onhover-div mobile-cart">
                                            <div><img alt="" src="assets/images/icon/layout4/cart.png" class="img-fluid">
                                                <i class="icon-shopping-cart"></i></div>
                                            <ul class="show-div shopping-cart">
                                                <li>
                                                    <div class="media">
                                                        <a href="#"><img alt="" class="mr-3" src="assets/images/fashion/product/1.jpg"></a>
                                                        <div class="media-body">
                                                            <a href="#"><h4>item name</h4></a>
                                                            <h4><span>1 x $ 299.00</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="close-circle">
                                                        <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <a href="#"><img alt="" class="mr-3" src="assets/images/fashion/product/2.jpg" ></a>
                                                        <div class="media-body">
                                                            <a href="#"><h4>item name</h4></a>
                                                            <h4><span>1 x $ 299.00</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="close-circle">
                                                        <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="total">
                                                        <h5>subtotal : <span>$299.00</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="buttons">
                                                        <a href="cart.html" class="view-cart">view cart</a>
                                                        <a href="#" class="checkout">checkout</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->





@yield('content')
<!-- footer -->
<footer>
    <div class="dark-layout">
        <div class="container">
            <section class="section-b-space border-b">
                <div class="row footer-theme2">
                    <div class="col-lg-3">
                        <div class="footer-title footer-mobile-title">
                            <h4>about</h4>
                        </div>
                        <div class="footer-contant">
                            <div class="footer-logo">
                                <img src="assets/images/icon/logo/f3.png" alt="">
                            </div>
                            <p>A1MODA Is The First Arabic E-Commerce In Europe Avaliable in 3 Language Arabic , English , Dutch</p>
                        </div>
                    </div>
                    <div class="col-lg-6 subscribe-wrapper">
                        <div class="subscribe-block">
                            <h2>newsletter</h2>
                            <form >
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Enter your email">
                                    <button type="submit" class="btn btn-solid ">subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-title">
                            <h4>store information</h4>
                        </div>
                        <div class="footer-contant">
                            <ul class="contact-details">
                                <li>Istanbul / Turkey
                                    Fatih</li>
                                <li>Call Us: 000-000-0000</li>
                                <li>Email Us: <a href="#">Support@a1moda.com</a></li>
                                <li>Fax: 123456</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    {{--<div class="dark-layout">--}}
    {{--<div class="container">--}}
    {{--<section class="small-section">--}}
    {{--<div class="row footer-theme2">--}}
    {{--<div class="col p-set">--}}
    {{--<div class="footer-link">--}}
    {{--<div class="footer-title">--}}
    {{--<h4>my account</h4>--}}
    {{--</div>--}}
    {{--<div class="footer-contant">--}}
    {{--<ul>--}}
    {{--<li><a href="#">mens</a></li>--}}
    {{--<li><a href="#">womens</a></li>--}}
    {{--<li><a href="#">clothing</a></li>--}}
    {{--<li><a href="#">accessories</a></li>--}}
    {{--<li><a href="#">featured</a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="footer-link-b">--}}
    {{--<div class="footer-title">--}}
    {{--<h4>why we choose</h4>--}}
    {{--</div>--}}
    {{--<div class="footer-contant">--}}
    {{--<ul>--}}
    {{--<li><a href="#">shipping & return</a></li>--}}
    {{--<li><a href="#">secure shopping</a></li>--}}
    {{--<li><a href="#">gallary</a></li>--}}
    {{--<li><a href="#">affiliates</a></li>--}}
    {{--<li><a href="#">contacts</a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    {{--</div>--}}
    {{--</div>--}}
    <div class="sub-footer darker-subfooter">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="footer-end">
                        <p><i class="fa fa-copyright" aria-hidden="true"></i>  2018-19  powered by GriffinDesign</p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="payment-card-bottom">
                        <ul>
                            <li>
                                <a href="#"><img src="assets/images/icon/visa.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/icon/mastercard.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/icon/paypal.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/icon/american-express.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/icon/discover.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->


<!--modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body modal12">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="modal-bg">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="offer-content">
                                    <img src="assets/images/Offer-banner.png" class="img-fluid" alt="">
                                    <h2>newsletter</h2>
                                    <form action="https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda"  class="form-inline subscribe-form auth-form needs-validation" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                                        <div class="form-group mx-sm-3">
                                            <input type="text" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="Enter your email" required="required">
                                        </div>
                                        <button type="submit" class="btn btn-solid" id="mc-submit">subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--modal popup end-->


<!-- Quick-view modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content quick-view-modal">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="row">
                    <div class="col-lg-6  col-xs-12">
                        <div class="quick-view-img">
                            <img src="assets/images/pro3/1.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2> Women Pink Shirt </h2>
                            <h3>$32.96 </h3>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                            </div>
                            <div class="product-description border-product">
                                <div class="size-box">
                                    <ul>
                                        <li class="active"><a href="#">s</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">l</a></li>
                                        <li><a href="#">xl</a></li>
                                    </ul>
                                </div>
                                <h6 class="product-title">quantity</h6>
                                <div class="qty-box">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                <i class="icon-angle-left"></i>
                                            </button>
                                        </span>
                                        <input type="text"  name="quantity" class="form-control input-number" value="1">
                                        <span class="input-group-prepend">
                                            <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                <i class="icon-angle-right"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-buttons">
                                <a href="#"  class="btn btn-solid">add to cart</a>
                                <a href="#" class="btn btn-solid">view detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick-view modal popup end-->


<!-- tap to top -->
<div class="tap-top">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
<!-- tap to top End -->


<!-- latest jquery-->
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}" ></script>

<!-- menu js-->
<script src="{{asset('assets/js/menu.js')}}"></script>

<!-- popper js-->
<script src="{{asset('assets/js/popper.min.js')}}" ></script>

<!-- slick js-->
<script  src="{{asset('assets/js/slick.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('assets/js/bootstrap.js')}}" ></script>

<!-- Bootstrap Notification js-->
<script src="{{asset('assets/js/bootstrap-notify.min.js')}}"></script>

<!-- Theme js-->
<script src="{{asset('assets/js/script.js')}}" ></script>

<script>
    $(window).on('load',function(){
        $('#exampleModal').modal('show');
    });
    function openSearch() {
        document.getElementById("search-overlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("search-overlay").style.display = "none";
    }
</script>

</body>


</html>


