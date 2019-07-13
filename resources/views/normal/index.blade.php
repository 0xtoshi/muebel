<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/torress-preview/torress/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Jul 2019 02:07:30 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $data['judul'] }}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="{{ $data['diskripsi'] }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="assets/css/vendor/fontawesome-stars.css">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="assets/css/vendor/ion-fonts.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <!-- Animation -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <!-- Venobox.css -->
    <link rel="stylesheet" href="assets/css/plugins/venobox.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->
    <!--
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--<link rel="stylesheet" href="assets/css/style.min.css">-->

</head>

<body class="template-color-1">

    <div class="main-wrapper">

        <!-- Begin Loading Area -->
        <div class="loading">
            <div class="text-center middle">
                <div class="main-loader">
                    <span class="loader1"></span>
                    <span class="loader2"></span>
                    <span class="loader3"></span>
                </div>
            </div>
        </div>
        <!-- Loading Area End Here -->

        <!-- Begin Torress's Header Main Area -->
        <header class="header-main_area">
            <div class="header-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5">
                            <div class="ht-left_area">
                                <div class="essential-stuff">
                                    <ul>
                                        <li class="welcome-msg">
                                            <span>Selamat Datang Di {{ $data['nama_toko'] }}</span>
                                        </li>
                                        <li class="contact-info">
                                            <span class="ion-android-call"></span>
                                            <a href="tel://{{ $data['telp_toko'] }}">{{ $data['telp_toko'] }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="ht-right_area">
                                <div class="ht-menu">
                                    <ul>
                                        <li><a href="my-account.html">Akun</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-5 col-sm-5">
                            <div class="header-logo">
                                <a href="index.html">
                                    <h2 style="color: #fff"> Muebel </h2>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="hm-form_area">
                                <form action="#" class="hm-searchbox">
                                    <input type="text" placeholder="Search here">
                                    <button class="torress-search_btn" type="submit"><i class="ion-android-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 d-none d-lg-block">
                            <div class="hm-minicart_area">
                                <ul>
                                    <li>
                                        <a href="cart.html">
                                            <div class="minicart-icon">
                                                <i class="ion-bag"></i> <span> Keranjang </span>
                                                <span class="item-count">02</span>
                                            </div>
                                            <div class="minicart-title">
                                                
                                            </div>
                                        </a>
                                      
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 d-block d-lg-none">
                            <div class="mobile-menu_area">
                                <ul>
                                    <li class="minicart-area">
                                        <a href="cart.html"><i class="ion-bag"></i><span class="item-count">2</span></a>
                                    </li>
                                    <li>
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white d-lg-none d-block">
                                            <i class="ion-navicon"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 d-none d-lg-block position-static">
                            <div class="main-menu_area">
                                <nav class="main_nav">
                                    <ul>
                                        <li><a href="index.html">Beranda</a>
                                        
                                        </li>
                                        <li class="megamenu-holder"><a href="shop-left-sidebar.html">Shop</a>
                                            <ul class="torress-megamenu">
                                                <li><span class="megamenu-title">Shop Page Layout</span>
                                                    <ul>
                                                        <li><a href="shop-3-column.html">Grid Fullwidth</a></li>
                                                        <li><a href="shop-left-sidebar.html">Left Sidebar</a></li>
                                                        <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                        <li><a href="shop-list-fullwidth.html">List Fullwidth</a></li>
                                                        <li><a href="shop-list-left-sidebar.html">List Left Sidebar</a></li>
                                                        <li><a href="shop-list-right-sidebar.html">List Right Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><span class="megamenu-title">Single Product Style</span>
                                                    <ul>
                                                        <li><a href="single-product-gallery-left.html">Gallery Left</a></li>
                                                        <li><a href="single-product-gallery-right.html">Gallery Right</a>
                                                        </li>
                                                        <li><a href="single-product-tab-style-left.html">Tab Style Left</a>
                                                        </li>
                                                        <li><a href="single-product-tab-style-right.html">Tab Style
                                                                Right</a>
                                                        </li>
                                                        <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                                                        <li><a href="single-product-sticky-right.html">Sticky Right</a></li>
                                                    </ul>
                                                </li>
                                                <li><span class="megamenu-title">Single Product Type</span>
                                                    <ul>
                                                        <li><a href="single-product.html">Single Product</a></li>
                                                        <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                                        <li><a href="single-product-group.html">Single Product Group</a>
                                                        </li>
                                                        <li><a href="single-product-variable.html">Single Product Variable</a>
                                                        </li>
                                                        <li><a href="single-product-affiliate.html">Single Product
                                                                Affiliate</a>
                                                        </li>
                                                        <li><a href="single-product-slider.html">Single Product Slider</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><span class="megamenu-title">Shop Related Pages</span>
                                                    <ul>
                                                        <li><a href="my-account.html">My Account</a></li>
                                                        <li><a href="login-register.html">Login | Register</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="compare.html">Compare</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Bantuan</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom_area header-sticky stick">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-5 col-sm-5">
                            <div class="header-logo">
                                <a href="index.html">
                                    <h2 style="color: #fff;"> Muebel </h2>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 d-none d-lg-block position-static">
                            <div class="main-menu_area">
                                <nav class="main_nav">
                                     <ul>
                                        <li><a href="index.html">Beranda</a>
                                        
                                        </li>
                                        <li class="megamenu-holder"><a href="shop-left-sidebar.html">Shop</a>
                                            <ul class="torress-megamenu">
                                                <li><span class="megamenu-title">Shop Page Layout</span>
                                                    <ul>
                                                        <li><a href="shop-3-column.html">Grid Fullwidth</a></li>
                                                        <li><a href="shop-left-sidebar.html">Left Sidebar</a></li>
                                                        <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                        <li><a href="shop-list-fullwidth.html">List Fullwidth</a></li>
                                                        <li><a href="shop-list-left-sidebar.html">List Left Sidebar</a></li>
                                                        <li><a href="shop-list-right-sidebar.html">List Right Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><span class="megamenu-title">Single Product Style</span>
                                                    <ul>
                                                        <li><a href="single-product-gallery-left.html">Gallery Left</a></li>
                                                        <li><a href="single-product-gallery-right.html">Gallery Right</a>
                                                        </li>
                                                        <li><a href="single-product-tab-style-left.html">Tab Style Left</a>
                                                        </li>
                                                        <li><a href="single-product-tab-style-right.html">Tab Style
                                                                Right</a>
                                                        </li>
                                                        <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                                                        <li><a href="single-product-sticky-right.html">Sticky Right</a></li>
                                                    </ul>
                                                </li>
                                                <li><span class="megamenu-title">Single Product Type</span>
                                                    <ul>
                                                        <li><a href="single-product.html">Single Product</a></li>
                                                        <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                                        <li><a href="single-product-group.html">Single Product Group</a>
                                                        </li>
                                                        <li><a href="single-product-variable.html">Single Product Variable</a>
                                                        </li>
                                                        <li><a href="single-product-affiliate.html">Single Product
                                                                Affiliate</a>
                                                        </li>
                                                        <li><a href="single-product-slider.html">Single Product Slider</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><span class="megamenu-title">Shop Related Pages</span>
                                                    <ul>
                                                        <li><a href="my-account.html">My Account</a></li>
                                                        <li><a href="login-register.html">Login | Register</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="compare.html">Compare</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Bantuan</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 d-block d-lg-none">
                            <div class="mobile-menu_area">
                                <ul>
                                    <li class="minicart-area">
                                        <a href="cart.html"><i class="ion-bag"></i><span class="item-count">2</span></a>
                                    </li>
                                    <li>
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white d-lg-none d-block">
                                            <i class="ion-navicon"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-menu-inner">
                    <div class="container">
                        <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                        <div class="offcanvas-inner_search">
                            <form action="#" class="hm-searchbox">
                                <input type="text" placeholder="Search for item...">
                                <button class="search_btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                        <nav class="offcanvas-navigation">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active"><a href="index.html"><span
                                        class="mm-text">Home</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="index.html">
                                                <span class="mm-text">Home Shop 01</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">
                                                <span class="mm-text">Home Shop 02</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="shop-left-sidebar.html">
                                        <span class="mm-text">Shop</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="shop-left-sidebar.html">
                                                <span class="mm-text">Grid View</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop-3-column.html">
                                                        <span class="mm-text">Grid Fullwidth</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-left-sidebar.html">
                                                        <span class="mm-text">Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-right-sidebar.html">
                                                        <span class="mm-text">Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="shop-list-left-sidebar.html">
                                                <span class="mm-text">Shop List</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop-list-fullwidth.html">
                                                        <span class="mm-text">Full Width</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-left-sidebar.html">
                                                        <span class="mm-text">Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-right-sidebar.html">
                                                        <span class="mm-text">Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="single-product-gallery-left.html">
                                                <span class="mm-text">Single Product Style</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="single-product-gallery-left.html">
                                                        <span class="mm-text">Gallery Left</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-gallery-right.html">
                                                        <span class="mm-text">Gallery Right</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-tab-style-left.html">
                                                        <span class="mm-text">Tab Style Left</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-tab-style-right.html">
                                                        <span class="mm-text">Tab Style Right</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sticky-left.html">
                                                        <span class="mm-text">Sticky Left</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sticky-right.html">
                                                        <span class="mm-text">Sticky Right</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="single-product.html">
                                                <span class="mm-text">Single Product Type</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="single-product.html">
                                                        <span class="mm-text">Single Product</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sale.html">
                                                        <span class="mm-text">Single Product Sale</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-group.html">
                                                        <span class="mm-text">Single Product Group</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-variable.html">
                                                        <span class="mm-text">Single Product Variable</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-affiliate.html">
                                                        <span class="mm-text">Single Product Affiliate</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-slider.html">
                                                        <span class="mm-text">Single Product Slider</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="single-product.html">
                                                <span class="mm-text">Shop Related Pages</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="my-account.html">
                                                        <span class="mm-text">My Account</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="login-register.html">
                                                        <span class="mm-text">Login | Register</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">
                                                        <span class="mm-text">Wishlist</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html">
                                                        <span class="mm-text">Cart</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="checkout.html">
                                                        <span class="mm-text">Checkout</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">
                                                        <span class="mm-text">Comparer</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="blog-left-sidebar.html">
                                        <span class="mm-text">Blog</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children has-children">
                                            <a href="blog-left-sidebar.html">
                                                <span class="mm-text">Grid View</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="blog-2-column.html">
                                                        <span class="mm-text">Column Two</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-3-column.html">
                                                        <span class="mm-text">Column Three</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-left-sidebar.html">
                                                        <span class="mm-text">Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-right-sidebar.html">
                                                        <span class="mm-text">Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children has-children">
                                            <a href="blog-list-left-sidebar.html">
                                                <span class="mm-text">List View</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="blog-list-fullwidth.html">
                                                        <span class="mm-text">List Fullwidth</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-list-left-sidebar.html">
                                                        <span class="mm-text">List Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-list-right-sidebar.html">
                                                        <span class="mm-text">List Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children has-children">
                                            <a href="blog-details-left-sidebar.html">
                                                <span class="mm-text">Blog Details</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="blog-details-left-sidebar.html">
                                                        <span class="mm-text">Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-details-right-sidebar.html">
                                                        <span class="mm-text">Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children has-children">
                                            <a href="blog-gallery-format.html">
                                                <span class="mm-text">Blog Format</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="blog-gallery-format.html">
                                                        <span class="mm-text">Gallery Format</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-audio-format.html">
                                                        <span class="mm-text">Audio Format</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-video-format.html">
                                                        <span class="mm-text">Video Format</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="index.html">
                                        <span class="mm-text">Pages</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="about-us.html">
                                                <span class="mm-text">About Us</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact.html">
                                                <span class="mm-text">Contact</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="faq.html">
                                                <span class="mm-text">FAQ</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="404.html">
                                                <span class="mm-text">Error 404</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <nav class="offcanvas-navigation user-setting_area">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active"><a href="javascript:void(0)"><span
                                        class="mm-text">User
                                        Setting</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="my-account.html">
                                                <span class="mm-text">My Account</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="login-register.html">
                                                <span class="mm-text">Login | Register</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="javascript:void(0)"><span
                                        class="mm-text">Currency</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">EUR €</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">USD $</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="javascript:void(0)"><span
                                        class="mm-text">Language</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">English</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">Français</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">Romanian</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">Japanese</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>


        <!-- Begin Torress's Product Tab Area Two -->
        <div class="torress-product-tab_area torress-product-tab_area-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="banner-item">
                           <ul class="list-group">
                              <li class="list-group-item active">Kategori</li>
                              <li class="list-group-item">Dapibus ac facilisis in</li>
                            
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="tab-content torress-tab_content">
                                    <div id="home" class="tab-pane active show" role="tabpanel">
                                        <div class="torress-product-tab_slider slider-navigation_style-1">
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/7.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Ullam cumque</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$75.91</span>
                                                                <span class="old-price">$80.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/8.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Itaque doloremque</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$45.91</span>
                                                                <span class="old-price">$50.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/1.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">libero repellat iste</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$55.91</span>
                                                                <span class="old-price">$60.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/2.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Eius ratione temporibus</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$46.91</span>
                                                                <span class="old-price">$50.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/3.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Omnis optio voluptate</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$38.40</span>
                                                                <span class="old-price">$45.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/4.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Earum suscipit commodi</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$80.91</span>
                                                                <span class="old-price">$85.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/5.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Doloribus maiores earum</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$64.91</span>
                                                                <span class="old-price">$50.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/6.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Fugit reiciendis omnis</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$56.91</span>
                                                                <span class="old-price">$60.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/9.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Voluptates quae</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$46.91</span>
                                                                <span class="old-price">$50.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/10.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Excepturi dolorum</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$36.91</span>
                                                                <span class="old-price">$40.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/11.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Cupiditate facere</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$90.91</span>
                                                                <span class="old-price">$95.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/12.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Autem culpa</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$65.91</span>
                                                                <span class="old-price">$70.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="office" class="tab-pane" role="tabpanel">
                                        <div class="torress-product-tab_slider slider-navigation_style-1">
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/2.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Eius ratione temporibus</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$46.91</span>
                                                                <span class="old-price">$50.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/3.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Omnis optio voluptate</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$38.40</span>
                                                                <span class="old-price">$45.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/4.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Earum suscipit commodi</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$80.91</span>
                                                                <span class="old-price">$85.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/5.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Doloribus maiores earum</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$64.91</span>
                                                                <span class="old-price">$50.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/6.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Fugit reiciendis omnis</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$56.91</span>
                                                                <span class="old-price">$60.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/9.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Voluptates quae</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$46.91</span>
                                                                <span class="old-price">$50.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/10.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Excepturi dolorum</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$36.91</span>
                                                                <span class="old-price">$40.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/7.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Ullam cumque</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$75.91</span>
                                                                <span class="old-price">$80.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/8.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Itaque doloremque</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$45.91</span>
                                                                <span class="old-price">$50.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/1.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">libero repellat iste</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$55.91</span>
                                                                <span class="old-price">$60.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/11.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Cupiditate facere</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$90.91</span>
                                                                <span class="old-price">$95.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/12.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Autem culpa</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$65.91</span>
                                                                <span class="old-price">$70.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="decor" class="tab-pane" role="tabpanel">
                                        <div class="torress-product-tab_slider slider-navigation_style-1">
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/5.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Doloribus maiores earum</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$64.91</span>
                                                                <span class="old-price">$50.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/6.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Fugit reiciendis omnis</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$56.91</span>
                                                                <span class="old-price">$60.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/9.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Voluptates quae</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$46.91</span>
                                                                <span class="old-price">$50.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/10.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Excepturi dolorum</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$36.91</span>
                                                                <span class="old-price">$40.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/7.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Ullam cumque</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$75.91</span>
                                                                <span class="old-price">$80.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/8.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Itaque doloremque</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$45.91</span>
                                                                <span class="old-price">$50.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/2.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Eius ratione temporibus</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$46.91</span>
                                                                <span class="old-price">$50.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/3.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Omnis optio voluptate</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$38.40</span>
                                                                <span class="old-price">$45.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/4.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Earum suscipit commodi</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$80.91</span>
                                                                <span class="old-price">$85.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/1.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">libero repellat iste</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$55.91</span>
                                                                <span class="old-price">$60.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/11.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Cupiditate facere</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$90.91</span>
                                                                <span class="old-price">$95.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img class="primary-img" src="assets/images/product/medium-size/12.jpg" alt="Torress's Product Image">
                                                        </a>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                </li>
                                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                                </li>
                                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i
                                                                        class="ion-ios-reload"></i></a>
                                                                </li>
                                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i
                                                                        class="ion-bag"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <h6 class="product-name"><a href="single-product.html">Autem culpa</a></h6>
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li><i class="ion-ios-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price-box">
                                                                <span class="new-price">$65.91</span>
                                                                <span class="old-price">$70.99</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Torress's Product Tab Area Two End Here -->

        <!-- Begin Torress's Brand Area -->

        <!-- Torress's Brand Area End Here -->
        <!-- Begin Torress's Footer Area -->
        <div class="torress-footer_area">
            <div class="footer-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="newsletter-area">
                                <div class="newsletter-info">
                                    <h3 class="heading">Dapatkan Update Produk Terbaru</h3>
                                    <p class="short-desc">Kirimi Saya Katalog Produk Terbaru Melalui Email</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="newsletter-form_wrap">
                                <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletters-form validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                        <div id="mc-form" class="mc-form subscribe-form">
                                            <input id="mc-email" class="newsletter-input" type="email" autocomplete="off" placeholder="Masukan Alamat Email" />
                                            <button class="newsletter-btn" id="mc-submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle_area">
                <div class="container">
                    <div class="row">
  

                        
                        <div class="col-lg-6">
                            <div class="footer-widgets_title">
                                <h4>Contact Us</h4>
                            </div>
                            <div class="footer-widgets footer-contact_info">
                                <ul>
                                    <li>
                                        <i class="ion-ios-home-outline"></i>
                                        <span>169-C, Technohub, Dubai Silicon Oasis.</span>
                                    </li>
                                    <li>
                                        <i class="ion-ios-email-outline"></i>
                                        <span>Email:</span>
                                        <a href="mailto://info@yourdomain.com">info@yourdomain.com</a>
                                    </li>
                                    <li>
                                        <i class="ion-android-call"></i>
                                        <span>Phone:</span>
                                        <div class="cellphone-number_area">
                                            <a href="tel://+123123321345">(+123) 123 321 345</a>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="ion-ios-calendar-outline"></i>
                                        <span>Mon-Sat 9:00pm – 5:00pm. Sun: Weekend</span>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <!-- Footer Upper Bottom Area End Here -->
            <!-- Begin Footer Bottom Area -->
            <div class="footer-bottom_area">
                <div class="container">
                    <div class="row">
                        <!-- Begin Copyright Area -->
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright">
                                <span>Copyright &copy; 2019 <a href="javascript:void(0)">Furntom.</a> All rights reserved.</span>
                            </div>
                        </div>
                        <!-- Copyright Area End Here -->
                        <!-- Begin Footer Bottom Menu Area -->
                        <div class="col-lg-6 col-md-6">
                            <div class="fotter-bottom_menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about-us.html">About</a></li>
                                    <li><a href="shop-left-sidebar.html">Shop</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Bottom Menu Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Footer Bottom Area End Here -->
        </div>
        <!-- Torress's Footer Area End Here -->
        <!-- Begin Torress's Modal Area -->
        <div class="modal fade modal-wrapper" id="exampleModalCenter">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-inner-area sp-area row">
                            <div class="col-lg-5">
                                <div class="sp-img_area">
                                    <div class="sp-img_slider-2 slick-img-slider torress-slick-slider" data-slick-options='{
                                                        "slidesToShow": 1,
                                                        "arrows": false,
                                                        "fade": true,
                                                        "draggable": false,
                                                        "swipe": false,
                                                        "asNavFor": ".sp-img_slider-nav"
                                                        }'>
                                        <div class="single-slide red">
                                            <img src="assets/images/product/large-size/1.jpg" alt="Torress's Product Image">
                                        </div>
                                        <div class="single-slide orange">
                                            <img src="assets/images/product/large-size/2.jpg" alt="Torress's Product Image">
                                        </div>
                                        <div class="single-slide brown">
                                            <img src="assets/images/product/large-size/3.jpg" alt="Torress's Product Image">
                                        </div>
                                        <div class="single-slide umber">
                                            <img src="assets/images/product/large-size/4.jpg" alt="Torress's Product Image">
                                        </div>
                                    </div>
                                    <div class="sp-img_slider-nav slick-slider-nav torress-slick-slider" data-slick-options='{
                                   "slidesToShow": 4,
                                    "asNavFor": ".sp-img_slider-2",
                                   "focusOnSelect": true
                                  }' data-slick-responsive='[
                                                        {"breakpoint":1501, "settings": {"slidesToShow": 3}},
                                                        {"breakpoint":1200, "settings": {"slidesToShow": 2}},
                                                        {"breakpoint":992, "settings": {"slidesToShow": 4}},
                                                        {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                                        {"breakpoint":321, "settings": {"slidesToShow": 2}}
                                                    ]'>
                                        <div class="single-slide red">
                                            <img src="assets/images/product/small-size/1.jpg" alt="Torress's Product Thumnail">
                                        </div>
                                        <div class="single-slide orange">
                                            <img src="assets/images/product/small-size/2.jpg" alt="Torress's Product Thumnail">
                                        </div>
                                        <div class="single-slide brown">
                                            <img src="assets/images/product/small-size/3.jpg" alt="Torress's Product Thumnail">
                                        </div>
                                        <div class="single-slide umber">
                                            <img src="assets/images/product/small-size/4.jpg" alt="Torress's Product Thumnail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6">
                                <div class="sp-content">
                                    <div class="sp-heading">
                                        <h5><a href="single-product.html">Garden Chair</a></h5>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price">$70.00</span>
                                        <span class="old-price">$80.00</span>
                                    </div>
                                    <div class="color-list_area">
                                        <span class="sub-title">Available color option</span>
                                        <div class="color-list">
                                            <a href="javascript:void(0)" class="single-color active" data-swatch-color="red">
                                                <span class="bg-red_color"></span>
                                                <span class="color-text">Red (+$3.61)</span>
                                            </a>
                                            <a href="javascript:void(0)" class="single-color" data-swatch-color="orange">
                                                <span class="burnt-orange_color"></span>
                                                <span class="color-text">Orange (+$2.71)</span>
                                            </a>
                                            <a href="javascript:void(0)" class="single-color" data-swatch-color="brown">
                                                <span class="brown_color"></span>
                                                <span class="color-text">Brown (+$0.90)</span>
                                            </a>
                                            <a href="javascript:void(0)" class="single-color" data-swatch-color="umber">
                                                <span class="raw-umber_color"></span>
                                                <span class="color-text">Umber (+$1.81)</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="features">
                                        <a href="single-product.html">See all features</a>
                                    </div>
                                    <div class="quantity-area">
                                        <div class="quantity">
                                            <label>Quantity</label>
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" value="1" type="text">
                                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                            </div>
                                        </div>
                                        <div class="quantity-btn">
                                            <ul>
                                                <li><a href="cart.html" class="add-to_cart">Add To Cart</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="short-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                    </div>
                                    <div class="torress-social_link">
                                        <div class="social-title">
                                            <h3>Share This Product</h3>
                                        </div>
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                                    <i class="fab fa-twitter-square"></i>
                                                </a>
                                            </li>
                                            <li class="youtube">
                                                <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="google-plus">
                                                <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                                    <i class="fab fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://rss.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
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
        <!-- Torress's Modal Area End Here -->

    </div>

    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <!-- Slick Slider JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <!-- Countdown JS -->
    <script src="assets/js/plugins/countdown.js"></script>
    <!-- Barrating JS -->
    <script src="assets/js/plugins/jquery.barrating.min.js"></script>
    <!-- Counterup JS -->
    <script src="assets/js/plugins/jquery.counterup.js"></script>
    <!-- Nice Select JS -->
    <script src="assets/js/plugins/jquery.nice-select.js"></script>
    <!-- Sticky Sidebar JS -->
    <script src="assets/js/plugins/jquery.sticky-sidebar.js"></script>
    <!-- jQuery UI -->
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <!-- jQuery UI Touch Punch -->
    <script src="assets/js/plugins/jquery.ui.touch-punch.min.js"></script>
    <!-- Venobox JS -->
    <script src="assets/js/plugins/venobox.min.js"></script>
    <!-- Scroll Top JS -->
    <script src="assets/js/plugins/scroll-top.js"></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src="assets/js/plugins/theia-sticky-sidebar.min.js"></script>
    <!-- Waypoints JS -->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!-- ElevateZoom JS -->
    <script src="assets/js/plugins/jquery.elevateZoom-3.0.8.min.js"></script>
    <!-- Images loaded JS -->
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <!-- Isotope JS -->
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <!-- Ajax Mail JS -->
    <script src="assets/js/ajax-mail.js"></script>

    <!-- Vendor & Plugins JS (Please remove the comment from below vendor.min.js & plugins.min.js for better website load performance and remove js files from avobe) -->
    <!--
<script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script>
-->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>


<!-- Mirrored from demo.hasthemes.com/torress-preview/torress/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Jul 2019 02:09:17 GMT -->
</html>