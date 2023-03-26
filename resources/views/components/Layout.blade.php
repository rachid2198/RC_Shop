<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZ RC modélisme</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Hmart-Smart Product eCommerce html Template">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}" />
    <!-- CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font.awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/pe-icon-7-stroke.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/venobox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Minify Version -->
    <!-- <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->
</head>

<body>
    <div class="main-wrapper">
        <header>
            <!-- Header top area start -->
            <div class="header-top">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col">
                            <div class="welcome-text">
                                <p>Vente de composants électroniques et d'accessoires</p>
                            </div>
                        </div>
                        <div class="col d-none d-lg-block">
                            <div class="top-nav">
                                <ul>
                                    <li><a href="tel:0123456789"><i class="fa fa-phone"></i> +012 3456 789</a></li>
                                    <li><a href="mailto:demo@example.com"><i class="fa fa-envelope-o"></i>
                                            mohamedaero16@yahoo.fr</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end -->
            <!-- Header action area start -->
            <div class="header-bottom  d-none d-lg-block">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-3 col">
                            <div class="header-logo">
                                <a href="/"><img src="{{asset('images/logo/logo.png') }}" alt="Site Logo" /></a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="search-element">
                                <form action="#">
                                    <input type="text" placeholder="Search" />
                                    <button><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col">
                            <div class="header-actions">
                                <a href="#offcanvas-cart"
                                    class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                    <i class="pe-7s-shopbag"></i>
                                    <span class="header-action-num">01</span>
                                    <!-- <span class="cart-amount">€30.00</span> -->
                                </a>
                                <a href="#offcanvas-mobile-menu"
                                    class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                    <i class="pe-7s-menu"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header action area end -->
            <!-- Header action area start -->
            <div class="header-bottom d-lg-none sticky-nav style-1">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-3 col">
                            <div class="header-logo">
                                <a href="/"><img src="{{ asset('images/logo/logo.png') }}" alt="Site Logo" /></a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="search-element">
                                <form action="#">
                                    <input type="text" placeholder="Search" />
                                    <button><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col">
                            <div class="header-actions">
                                <a href="#offcanvas-cart"
                                    class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                    <i class="pe-7s-shopbag"></i>
                                    <span class="header-action-num">01</span>
                                    <!-- <span class="cart-amount">€30.00</span> -->
                                </a>
                                <a href="#offcanvas-mobile-menu"
                                    class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                    <i class="pe-7s-menu"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header action area end -->
            <!-- header navigation area start -->
            <div class="header-nav-area d-none d-lg-block sticky-nav">
                <div class="container">
                    <div class="header-nav">
                        <div class="main-menu position-relative">
                            <ul>
                                <li><a href="/">Acceuil</a></li>
                                <li><a href="/produits">Boutique</a></li>
                                <li class="dropdown "><a href="#">Catégories<i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li class="dropdown position-static"><a href="blog-grid-left-sidebar.html">Moteurs Brushless
                                                <i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-2">
                                                <li><a href="blog-grid.html">EMAX 980</a></li>
                                                <li><a href="blog-grid.html">EMAX 860</a></li>
                                                <li><a href="blog-grid.html">EMAX 620</a></li>
                                                <li><a href="blog-grid.html">EMAX 1000</a></li>
                                                <li><a href="blog-grid.html">EMAX 1400</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="blog-list-left-sidebar.html">Hélics
                                                <i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-2">
                                                <li><a href="blog-list.html">Prop 10x45</a></li>
                                                <li><a href="blog-list.html">Prop 12x6</a></li>
                                                <li><a href="blog-list.html">Prop 13x6.5</a></li>
                                                <li><a href="blog-list.html">Prop 16x8</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="blog-single-left-sidebar.html"> ESC
                                            <i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-2">
                                                <li><a href="blog-single.html">ESC 20A</a>
                                                <li><a href="blog-single.html">ESC 30A</a>
                                                <li><a href="blog-single.html">ESC 40A</a>
                                                <li><a href="blog-single.html">ESC 50A</a>
                                                <li><a href="blog-single.html">ESC 60A</a>
                                                <li><a href="blog-single.html">ESC 80A</a>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown position-static"><a href="/marques">Marques </a>
                                </li>
                                <li><a href="/tracking">Suivi des commandes</a></li>
                                <li><a href="/garantie">Garantie</a></li>
                                <li><a href="/about">A propos de nous</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header navigation area end -->
            <div class="mobile-search-box d-lg-none">
                <div class="container">
                    <!-- mobile search start -->
                    <div class="search-element max-width-100">
                        <form action="#">
                            <input type="text" placeholder="Search" />
                            <button><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                    <!-- mobile search start -->
                </div>
            </div>
        </header>
        <!-- offcanvas overlay start -->
        <div class="offcanvas-overlay"></div>
        <!-- offcanvas overlay end -->
        <!-- OffCanvas Cart Start -->
        <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
            <div class="inner">
                <div class="head">
                    <span class="title">Panier</span>
                    <button class="offcanvas-close">×</button>
                </div>
                <div class="body customScroll">
                    <ul class="minicart-product-list">
                        <li>
                            <a href="single-product.html" class="image"><img
                                    src="https://scontent.falg6-1.fna.fbcdn.net/v/t45.5328-4/315345654_5504969579615614_6525359353039872198_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=c48759&_nc_eui2=AeGdyO2SnuU6pjtGLG0V7VpaJ7ACVDDDTXInsAJUMMNNcouzO7mbVNXKoSwIUorgUevSdVdDg6QOo-qoofJE--W_&_nc_ohc=A3TfyY1TJTUAX-M36kx&_nc_ht=scontent.falg6-1.fna&oh=00_AfCJU0XMqnRca2d9bNjyVIQ87yV2V07B0lgofiM1Q0ikKg&oe=64132ED0" 
                                    alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Anycubic Photon Mono</a>
                                <span class="quantity-price">1 x <span class="amount">220000 DA</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="single-product.html" class="image"><img
                                    src="https://scontent.falg6-1.fna.fbcdn.net/v/t45.5328-4/312963251_5622419964478041_5094373234694042432_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=c48759&_nc_eui2=AeFOtE9ZizVA9OmZwpnxqJs_t0yNh_c4UZm3TI2H9zhRmQUnIVkBNICnGzUtmdMCZJNFNXDQW-QpoAVragTm6VtV&_nc_ohc=CL3YrTR23ZkAX866894&_nc_ht=scontent.falg6-1.fna&oh=00_AfBZKCv1L1LhCPHRLRPZX0JPT2FF4_iKjFT7yKhRRlpzyQ&oe=64121576" 
                                    alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">elegoo mars 3 pro 4k</a>
                                <span class="quantity-price">1 x <span class="amount">145000 DA</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="single-product.html" class="image"><img
                                    src="https://scontent.falg6-2.fna.fbcdn.net/v/t45.5328-4/315999627_8253780054693635_1254714160917287736_n.png?stp=dst-png_s960x960&_nc_cat=109&ccb=1-7&_nc_sid=c48759&_nc_eui2=AeFFxshPdcc8rY-Noq5iya-v45Coh2imp9njkKiHaKan2fdw22U5DBvSdysIA3rs_quM3Gs4yMmagQ95uSCorKU5&_nc_ohc=o4OzX74fJ2EAX9sFum5&_nc_ht=scontent.falg6-2.fna&oh=00_AfBHU70SCY3mr39OH2Yf-u-RD4Bk0AGuxJa5HeCfZrperw&oe=64125E55" 
                                    alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Creality Ender 3 V2</a>
                                <span class="quantity-price">1 x <span class="amount">89000 DA</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="foot">
                    <div class="buttons mt-30px">
                        <a href="/cart" class="btn btn-dark btn-hover-primary mb-30px">Accéder au Panier</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- OffCanvas Cart End -->
        <!-- OffCanvas Menu Start -->
        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
            <button class="offcanvas-close"></button>
            <div class="user-panel">
                <ul>
                    <li><a href="tel:0123456789"><i class="fa fa-phone"></i> +012 3456 789</a></li>
                    <li><a href="mailto:demo@example.com"><i class="fa fa-envelope-o"></i> mohamedaero16@yahoo.fr</a></li>
                </ul>
            </div>
            <div class="inner customScroll">
                <div class="offcanvas-menu mb-4">
                    <ul>
                        <li><a href="/"><span class="menu-text">Acceuil</span></a>
                        </li>
                        <li><a href="/produits">Boutique</a></li>
                        <li>
                            <a><span class="menu-text">Catégories</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#"><span class="menu-text">Moteurs Brushless</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="404.html">EMAX 980</a></li>
                                        <li><a href="order-tracking.html">EMAX 860</a></li>
                                        <li><a href="faq.html">EMAX 620</a></li>
                                        <li><a href="coming-soon.html">EMAX 1000</a></li>
                                        <li><a href="coming-soon.html">EMAX 1400</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><span class="menu-text">Helics</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="cart.html">Prop 10x45</a></li>
                                        <li><a href="checkout.html">Prop 12x6</a></li>
                                        <li><a href="compare.html">Prop 13x6.5</a></li>
                                        <li><a href="wishlist.html">Prop 16x8</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><span class="menu-text">ESC</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="my-account.html">ESC 20A</a></li>
                                        <li><a href="login.html">ESC 30A</a></li>
                                        <li><a href="empty-cart.html">ESC 40A</a></li>
                                        <li><a href="thank-you-page.html">ESC 50A</a></li>
                                        <li><a href="thank-you-page.html">ESC 60A</a></li>
                                        <li><a href="thank-you-page.html">ESC 80A</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="/marques">Marques</a></li>
                        <li><a href="/tracking">Suivi des commandes</a></li>
                        <li><a href="/garantie">Garantie</a></li>
                        <li><a href="/about">A propos de nous</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <!-- OffCanvas Menu End -->
                <div class="offcanvas-social mt-auto">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- OffCanvas Menu End -->


    <main>
        {{ $slot }}
    </main>

    <div class="footer-area">
        <div class="footer-container">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-3 mb-md-30px mb-lm-30px">
                            <div class="single-wedge">
                                <div class="footer-logo">
                                    <a href="/"><img src="{{ asset('images/logo/logo.png') }}"
                                            alt=""></a>
                                </div>
                                <p class="about-text">Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod
                                    templ incididunt ut labore
                                </p>
                                <ul class="link-follow">
                                    <li>
                                        <a class="m-0" title="Twitter" target="_blank" rel="noopener noreferrer"
                                            href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a title="Tumblr" target="_blank" rel="noopener noreferrer"
                                            href="#"><i class="fa fa-tumblr" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Facebook" target="_blank" rel="noopener noreferrer"
                                            href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Instagram" target="_blank" rel="noopener noreferrer"
                                            href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-60px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Pages</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="/produits">Boutique</a>
                                            </li>
                                            <li class="li"><a class="single-link" href="contact.html">Marques</a>
                                            </li>
                                            <li class="li"><a class="single-link" href="cart.html">Panier</a>
                                            </li>
                                            <li class="li"><a class="single-link"
                                                    href="shop-left-sidebar.html">Garantie</a></li>
                                            <li class="li"><a class="single-link" href="/contact">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-40px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Catégories</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link"
                                                    href="my-account.html">Imprimantes 3D</a></li>
                                            <li class="li"><a class="single-link"
                                                    href="contact.html">Batteries</a>
                                            </li>
                                            <li class="li"><a class="single-link" href="cart.html">Moteurs</a>
                                            </li>
                                            <li class="li"><a class="single-link"
                                                    href="shop-left-sidebar.html">RC control</a></li>
                                            <li class="li"><a class="single-link" href="login.html">Flight
                                                    Control</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Contacts</h4>
                                <div class="footer-links">
                                    <!-- News letter area -->
                                    <p class="address">L'adresse est mis ici.</p>
                                    <p class="phone">Phone/Fax:<a href="tel:0123456789"> 0123456789</a></p>
                                    <p class="mail">Email:<a href="mailto:demo@example.com">
                                            mohamedaero16@yahoo.fr</a>
                                    </p>
                                    <p class="mail"><a href="https://demo@example.com"> mohamedaero16@yahoo.fr</a>
                                    </p>
                                    <!-- News letter area  End -->
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="line-shape-top line-height-1">
                        <div class="row flex-md-row-reverse align-items-center">
                            {{-- <div class="col-md-6 text-center text-md-end">
                                <div class="payment-mth"><a href="#"><img class="img img-fluid"
                                            src="{{ asset('images/icons/payment.png') }}" alt="payment-image"></a>
                                </div>
                            </div> --}}
                            <div class="text-center text-md-start">
                                <p class="copy-text"> © 2023 <strong>DZ RC modélisme</strong> Made With <i
                                        class="fa fa-heart" aria-hidden="true"></i> By <a class="company-name"
                                        href="https://themeforest.net/user/codecarnival/portfolio">
                                        <strong> Sadeem Informatique </strong></a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i
                            class="pe-7s-close"></i></button>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{ asset('images/product-image/zoom-image/1.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{ asset('images/product-image/zoom-image/2.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{ asset('images/product-image/zoom-image/3.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{ asset('images/product-image/zoom-image/4.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{ asset('images/product-image/zoom-image/5.webp') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs mt-20px slider-nav-style-1 small-nav">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{ asset('images/product-image/small-image/1.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{ asset('images/product-image/small-image/2.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{ asset('images/product-image/small-image/3.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{ asset('images/product-image/small-image/4.webp') }}"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="{{ asset('images/product-image/small-image/5.webp') }}"
                                            alt="">
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-details-content quickview-content">
                                <h2>Modern Smart Phone</h2>
                                <div class="pricing-meta">
                                    <ul class="d-flex">
                                        <li class="new-price">$20.90</li>
                                    </ul>
                                </div>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="read-review"><a class="reviews" href="#">( 2 Review
                                            )</a></span>
                                </div>
                                <p class="mt-30px">Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do
                                    eiusmll tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mill veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip exet commodo consequat.
                                    Duis aute irure dolor</p>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>SKU:</span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Ch-256xl</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>Categories: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Smart Device, </a>
                                        </li>
                                        <li>
                                            <a href="#">ETC</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>Tags: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Smart Device, </a>
                                        </li>
                                        <li>
                                            <a href="#">Phone</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                            value="1" />
                                    </div>
                                    <div class="pro-details-cart">
                                        <button class="add-cart"> Add To
                                            Cart</button>
                                    </div>
                                    <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                        <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                </div>
                                <div class="payment-img">
                                    <a href="#"><img src="{{ asset('images/icons/payment.png') }}"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
    <!-- Modal Cart -->
    <div class="modal customize-class fade" id="exampleModal-Cart" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="pe-7s-close"></i></button>
                    <div class="tt-modal-messages">
                        <i class="pe-7s-check"></i> Added to cart successfully!
                    </div>
                    <div class="tt-modal-product">
                        <div class="tt-img">
                            <img src="{{ asset('images/product-image/1.webp') }}" alt="Modern Smart Phone">
                        </div>
                        <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Global Vendor, plugins JS -->
    <!-- JS Files
    ============================================ -->
    <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ asset('js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/plugins/scrollUp.js') }}"></script>
    <script src="{{ asset('js/plugins/venobox.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/plugins/mailchimp-ajax.js') }}"></script>

    <!-- Minify Version -->
    <!-- <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/main.min.js"></script> -->

    <!--Main JS (Common Activation Codes)-->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
