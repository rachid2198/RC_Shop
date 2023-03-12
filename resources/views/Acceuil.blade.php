<x-Layout>
<!-- Hero/Intro Slider Start -->
<div class="section ">
    <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
        <!-- Hero slider Active -->
        <div class="swiper-wrapper">
            <!-- Single slider item -->
            <div class="hero-slide-item slider-height swiper-slide bg-color1" style="background-color:#5059db">
                {{-- data-bg-image="{{asset('images/hero/bg/hero-background.jpg')}}"> --}}
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                            <div class="hero-slide-content slider-animated-1">
                                <span class="category">Bienvenu à RC Shop</span>
                                <h2 class="title-1">Composants électroniques &<br>
                                    Accessoires <br> 
                                </h2>
                                <a href="shop-left-sidebar.html" class="btn btn-primary text-capitalize">Notre boutique</a>
                            </div>
                        </div>
                        <div
                            class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-end">
                            <div class="show-case">
                                <div class="hero-slide-image">
                                    <img src="{{asset('images/hero/inner-img/printer1.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single slider item -->
            <div class="hero-slide-item slider-height swiper-slide bg-color1" style="background-color:#5059db">
                {{-- data-bg-image="{{asset('images/hero/bg/hero-background.jpg')}}"> --}}
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                            <div class="hero-slide-content slider-animated-1">
                                <span class="category">Bienvenu à RC Shop</span>
                                <h2 class="title-1">Composants électroniques &<br>
                                    Accessoires <br> 
                                </h2>
                                <a href="shop-left-sidebar.html" class="btn btn-primary text-capitalize">Notre boutique</a>
                            </div>
                        </div>
                        <div
                            class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-end">
                            <div class="show-case">
                                <div class="hero-slide-image">
                                    <img src="{{asset('images/hero/inner-img/printer2.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-buttons">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>
<!-- Hero/Intro Slider End -->

<!-- Banner Area Start -->
<div class="banner-area style-one pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="single-banner nth-child-1">
                    <img src="{{asset('images/banner/printer1.jpg')}}" style="max-width:570px; max-height:540px" alt="">
                    <div class="banner-content nth-child-1">
                        <h3 class="title">Imprimantes 3D</h3>
                        <span class="category">Anycubic Kobra Neo</span>
                        <a href="shop-left-sidebar.html" class="shop-link"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-banner nth-child-2 mb-30px mb-lm-30px mt-lm-30px">
                    <img class="img-fluid" src="{{asset('images/banner/ventilo.jpg')}}"  alt="">
                    <div class="banner-content nth-child-2">
                        <h3 class="title">Accessoires</h3>
                        <span class="category">hélice 1045</span>
                        <a href="shop-left-sidebar.html" class="shop-link"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="single-banner nth-child-2">
                    <img src="{{asset('images/banner/battery1.jpg')}}" style="max-width:570px; max-height:255px" alt="">
                    <div class="banner-content nth-child-3">
                        <h3 class="title">Matériels</h3>
                        <span class="category">batterie lipo turnigy 4S</span>
                        <a href="shop-left-sidebar.html" class="shop-link"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->
<!-- Product Area Start -->
<div class="product-area pb-100px">
    <div class="container">
        <!-- Section Title & Tab Start -->
        <div class="row">
            <div class="col-12">
                <!-- Tab Start -->
                <div class="tab-slider d-md-flex justify-content-md-between align-items-md-center">
                    <ul class="product-tab-nav nav justify-content-start align-items-center">
                        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#newarrivals">New Arrivals</button>
                        </li>
                        <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#toprated">Top Rated</button>
                        </li>
                        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#featured">Featured</button>
                        </li>
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
        </div>
        <!-- Section Title & Tab End -->
        <div class="row">
            <div class="col">
                <div class="tab-content mt-60px">
                    <!-- 1st tab start -->
                    <div class="tab-pane fade show active" id="newarrivals">
                        <div class="row mb-n-30px">
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="new">New</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="img-fluid" src="{{asset('images/banner/printer1.jpg')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/banner/printer1.jpg')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Imprimantes 3D</a></span>
                                        <h5 class="title"><a href="single-product.html">Anycubic Kobra Neo
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">200000 DA</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="sale">-10%</span>
                                    <span class="new">New</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img class="img-fluid" src="{{asset('images/product-image/battery1.jpg')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/battery1.jpg')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Matériels</a></span>
                                        <h5 class="title"><a href="single-product.html">batterie lipo ZIPPY Compact
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="old">22000DA</span>
                                        <span class="new">20000DA</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="new">Sale</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{asset('images/product-image/3.webp')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/3.webp')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Smart Music Box
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="new">New</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{asset('images/product-image/4.webp')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/1.webp')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Air Pods 25Hjkl Black
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{asset('images/product-image/5.webp')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/5.webp')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Smart Hand Watch
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="sale">-8%</span>
                                    <span class="new">Sale</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{asset('images/product-image/6.webp')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/6.webp')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Smart Table Camera
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="old">$138.50</span>
                                        <span class="new">$112.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="new">Sale</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{asset('images/product-image/7.webp')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/1.webp')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Round Pocket Router
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="sale">-5%</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{asset('images/product-image/8.webp')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/8.webp')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Power Bank 10000Mhp
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="old">$260.00</span>
                                        <span class="new">$238.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 1st tab end -->
                    <!-- 2nd tab start -->
                    <div class="tab-pane fade" id="toprated">
                        <div class="row">
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="new">New</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{asset('images/product-image/1.webp')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/1.webp')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Modern Smart Phone
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="sale">-10%</span>
                                    <span class="new">New</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{asset('images/product-image/2.webp')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/2.webp')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Bluetooth Headphone
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="old">$48.50</span>
                                        <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="new">Sale</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{asset('images/product-image/3.webp')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/3.webp')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Smart Music Box
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="new">New</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{asset('images/product-image/4.webp')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/1.webp')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Air Pods 25Hjkl Black
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{asset('images/product-image/5.webp')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/5.webp')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Smart Hand Watch
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="sale">-8%</span>
                                    <span class="new">Sale</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{asset('images/product-image/6.webp')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/6.webp')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Smart Table Camera
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="old">$138.50</span>
                                        <span class="new">$112.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="new">Sale</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{asset('images/product-image/7.webp')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/1.webp')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Round Pocket Router
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="sale">-5%</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{asset('images/product-image/8.webp')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/8.webp')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Power Bank 10000Mhp
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="old">$260.00</span>
                                        <span class="new">$238.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2nd tab end -->
                    <!-- 3rd tab start -->
                    <div class="tab-pane fade" id="featured">
                        <div class="row">
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="new">New</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{asset('images/product-image/1.webp')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/1.webp')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Modern Smart Phone
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="sale">-10%</span>
                                    <span class="new">New</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{asset('images/product-image/2.webp')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/2.webp')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Bluetooth Headphone
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="old">$48.50</span>
                                        <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="new">Sale</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{asset('images/product-image/3.webp')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/3.webp')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Smart Music Box
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="new">New</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{asset('images/product-image/4.webp')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/1.webp')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Air Pods 25Hjkl Black
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{asset('images/product-image/5.webp')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/5.webp')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Smart Hand Watch
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="sale">-8%</span>
                                    <span class="new">Sale</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{asset('images/product-image/6.webp')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/6.webp')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Smart Table Camera
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="old">$138.50</span>
                                        <span class="new">$112.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="new">Sale</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{asset('images/product-image/7.webp')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/1.webp')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Round Pocket Router
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="sale">-5%</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="{{asset('images/product-image/8.webp')}}" alt="Product" />
                                            <img class="hover-image" src="{{asset('images/product-image/8.webp')}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Power Bank 10000Mhp
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="old">$260.00</span>
                                        <span class="new">$238.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                            class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 3rd tab end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End -->
<!-- Fashion Area Start -->
<div class="fashion-area" data-bg-image="{{asset('images/fashion/fashion-bg.webp')}}">
    <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 text-center">
                <h2 class="title"> <span>Smart Fashion</span> With Smart Devices </h2>
                <a href="shop-left-sidebar.html" class="btn btn-primary text-capitalize m-auto">Shop All Devices</a>
            </div>
        </div>
    </div>
</div>
<!-- Fashion Area End -->
<!-- Feature product area start -->
<div class="feature-product-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2 class="title">Featured Offers</h2>
                    <p>There are many variations of passages of Lorem Ipsum available</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 mb-md-35px mb-lm-35px">
                <div class="single-feature-content">
                    <div class="feature-image">
                        <img src="{{asset('images/feature-image/1.webp')}}" alt="">
                    </div>
                    <div class="top-content">
                        <h4 class="title"><a href="single-product.html">Bluetooth Headphone </a></h4>
                        <span class="price">
                    <span class="old"><del>$48.50</del></span>
                        <span class="new">$38.50</span>
                        </span>
                    </div>
                    <div class="bottom-content">
                        <div class="deal-timing">
                            <div data-countdown="2021/09/15"></div>
                        </div>
                        <a href="single-product-variable.html" class="btn btn-primary  m-auto"> Shop
                            Now </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="feature-right-content">
                    <div class="image-side">
                        <img src="{{asset('images/feature-image/2.webp')}}" alt=""> 
                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                            class="pe-7s-shopbag"></i></button>
                    </div>
                    <div class="content-side">
                        <div class="deal-timing">
                            <span>End In:</span>
                            <div data-countdown="2021/09/15"></div>
                        </div>
                        <div class="prize-content">
                            <h5 class="title"><a href="single-product.html">Ladies Smart Watch</a></h5>
                            <span class="price">
                    <span class="old">$48.50</span>
                            <span class="new">$38.50</span>
                            </span>
                        </div>
                        <div class="product-feature">
                            <ul>
                                <li>Predecessor : <span>None.</span></li>
                                <li>Support Type : <span>Neutral.</span></li>
                                <li>Cushioning : <span>High Energizing.</span></li>
                                <li>Total Weight : <span> 300gm</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="feature-right-content mt-30px">
                    <div class="image-side">
                        <img src="{{asset('images/feature-image/3.webp')}}" alt="">
                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                            class="pe-7s-shopbag"></i></button>
                    </div>
                    <div class="content-side">
                        <div class="deal-timing">
                            <span>End In:</span>
                            <div data-countdown="2021/09/15"></div>
                        </div>
                        <div class="prize-content">
                            <h5 class="title"><a href="single-product.html">Ladies Smart Watch</a></h5>
                            <span class="price">
                    <span class="old">$48.50</span>
                            <span class="new">$38.50</span>
                            </span>
                        </div>
                        <div class="product-feature">
                            <ul>
                                <li>Predecessor : <span>None.</span></li>
                                <li>Support Type : <span>Neutral.</span></li>
                                <li>Cushioning : <span>High Energizing.</span></li>
                                <li>Total Weight : <span> 300gm</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature product area End -->

@include('partials._Testimonials')
</x-Layout>