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
    {{ $css }}
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
                                <a href="/"><img src="{{ asset('images/logo/logo.png') }}" alt="Site Logo" /></a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="search-element">
                                <form action="{{route('products-display')}}" method="GET">
                                    <input type="text" placeholder="Search" name="search" required/>
                                    <button type="submit"><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col">
                            <div class="header-actions">
                                <a href="#offcanvas-cart"
                                    class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                    <i class="pe-7s-shopbag"></i>
                                    <span class="header-action-num">{{ count($cart) }}</span>
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
                                    <span class="header-action-num"></span>
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
                                <li class="dropdown "><a href="#">Catégories<i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        @foreach ($categories as $category)
                                            <li class="dropdown position-static"><a
                                                    href="{{ route('products-display', ['category' => $category->id]) }}">
                                                    {{ $category->nom }}
                                                    <i class="fa fa-angle-right"></i></a>
                                                <ul class="sub-menu sub-menu-2">
                                                    @foreach ($category->subcategories as $subcategory)
                                                        <li><a
                                                                href="{{ route('products-display', ['subcategory' => $subcategory->id]) }}">{{ $subcategory->nom }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown position-static"><a href="/marques">Marques </a>
                                </li>
                                <li><a href="/tracking">Commandes</a></li>
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
                        @foreach ($cart as $item)
                            <li>
                                <a href="" class="image"><img
                                        src="{{ $item['image'] ? asset('storage/' . $item['image']) : asset('images/blank/blank-category.jpg') }}"
                                        alt="{{ $item['nom'] }}"></a>
                                <div class="content">
                                    <a href="" class="title">{{ $item['nom'] }}</a>
                                    <span class="quantity-price">{{ $item['quantité'] }} x <span
                                            class="amount">{{ $item['prix'] }} DA</span></span>
                                    <form method="POST"
                                        action="{{ route('removeFromCart', ['product_id' => $item['id']]) }}">
                                        @csrf
                                        <button type="submit" class="remove">×</a>
                                    </form>
                                </div>
                            </li>
                        @endforeach
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
                    <li><a href="mailto:demo@example.com"><i class="fa fa-envelope-o"></i> mohamedaero16@yahoo.fr</a>
                    </li>
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
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('products-display', ['category' => $category->id]) }}"><span
                                                class="menu-text">{{ $category->nom }}</span></a>
                                        <ul class="sub-menu">
                                            @foreach ($category->subcategories as $subcategory)
                                                <li><a
                                                        href="{{ route('products-display', ['subcategory' => $subcategory->id]) }}">{{ $subcategory->nom }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach


                            </ul>
                        </li>
                        <li><a href="/marques">Marques</a></li>
                        <li><a href="/tracking">Suivi des commandes</a></li>
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
                                            <li class="li"><a class="single-link" href="/marques">Marques</a>
                                            </li>
                                            <li class="li"><a class="single-link" href="/tracking">Commandes</a>
                                            </li>
                                            <li class="li"><a class="single-link" href="/cart">Panier</a>
                                            </li>
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
                                            @foreach ($categories as $category)
                                                <li class="li"><a class="single-link"
                                                        href="{{ route('products-display', ['category' => $category->id]) }}">
                                                        {{ $category->nom }}</a></li>
                                            @endforeach
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
                                <p class="copy-text"> © <span id="currentYear"></span> <strong>DZ RC
                                        modélisme</strong> Made With <i class="fa fa-heart" aria-hidden="true"></i> By
                                    <a class="company-name" href="https://sadeeminfo.com">
                                        <strong> Sadeem Informatique </strong></a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Cart -->

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

    <script>
        const currentYear = new Date().getFullYear();
        document.getElementById('currentYear').textContent = currentYear;
    </script>

    {{ $js }}
</body>
