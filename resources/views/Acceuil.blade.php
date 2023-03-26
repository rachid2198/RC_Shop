<x-Layout>
  
    <!-- Hero/Intro Slider Start -->
    <div class="section ">
        <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
            <!-- Hero slider Active -->
            <div class="swiper-wrapper">
                <!-- Single slider item -->
                <div class="hero-slide-item slider-height swiper-slide bg-color1"
                    data-bg-image="{{ asset('images/hero/bg/hero-bg-1.jpg') }}">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                <div class="hero-slide-content slider-animated-1">
                                    <span class="category">Bienvenue à DZ RC modélisme</span>
                                    <h2 class="title-1">Composants électroniques &<br>
                                        Accessoires <br>
                                    </h2>
                                    <a href="/produits" class="btn btn-dark text-capitalize">Notre
                                        boutique</a>
                                </div>
                            </div>
                            <div
                                class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-end">
                                <div class="show-case">
                                    <div class="hero-slide-image">
                                        <img src="{{ asset('images/hero/inner-img/printer1.png') }}" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single slider item -->
                <div class="hero-slide-item slider-height swiper-slide bg-color1"
                    data-bg-image="{{ asset('images/hero/bg/hero-bg-1.jpg') }}">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                <div class="hero-slide-content slider-animated-1">
                                    <span class="category">Bienvenue à DZ RC modélisme</span>
                                    <h2 class="title-1">Imprimantes 3D <br>
                                        Moteurs Et<br>
                                        Batteries
                                    </h2>
                                    <a href="/produits" class="btn btn-dark text-capitalize">Notre
                                        boutique</a>
                                </div>
                            </div>
                            <div
                                class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-end">
                                <div class="show-case">
                                    <div class="hero-slide-image">
                                        <img src="{{ asset('images/hero/inner-img/printer2.png') }}" alt="" />
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
                        <img src="{{ asset('images/banner/printer1.jpg') }}" style="height:64vh" alt="">
                        <div class="banner-content nth-child-1">
                            <h3 class="title">Imprimantes 3D</h3>
                            <a href="shop-left-sidebar.html" class="shop-link"><i class="fa fa-arrow-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-banner nth-child-2 mb-30px mb-lm-30px mt-lm-30px">
                        <img class="img-fluid" src="{{ asset('images/banner/ventilo.jpg') }}" style="height:30vh"
                            alt="">
                        <div class="banner-content nth-child-2">
                            <h3 class="title">Accessoires</h3>
                            <a href="shop-left-sidebar.html" class="shop-link"><i class="fa fa-arrow-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="single-banner nth-child-2">
                        <img src="{{ asset('images/banner/battery1.jpg') }}" style="height:30vh" alt="">
                        <div class="banner-content nth-child-3">
                            <h3 class="title">Batteries</h3>
                            <a href="shop-left-sidebar.html" class="shop-link"><i class="fa fa-arrow-right"
                                    aria-hidden="true"></i></a>
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
                            <li class="nav-item"><button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#newarrivals">Nouveau</button>
                            </li>
                            <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#toprated">Meilleurs Ventes</button>
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
                                @foreach ($products as $product)
                                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                        <x-product-card :product="$product" />
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- 1st tab end -->
                        <!-- 2nd tab start -->
                        <div class="tab-pane fade" id="toprated">
                            <div class="row">
                                @foreach ($products as $product)
                                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                        <x-product-card :product="$product" />
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- 2nd tab end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End -->
    <!-- Fashion Area Start -->
    <div class="fashion-area"
        data-bg-image="https://scontent.falg6-1.fna.fbcdn.net/v/t39.30808-6/292277809_588566952880156_8514613177602795382_n.png?_nc_cat=104&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeFZAUMBz_fnvhMeizlG7DYHW03y3NtmnAJbTfLc22acAq27qjoUOJSpJaM5V8xFomA136To7dBF1JPO-rPn_YIu&_nc_ohc=b_HUyT_bNecAX8CIaDz&_nc_ht=scontent.falg6-1.fna&oh=00_AfDbWI_2ZPCG16IU0OhT_KDisjwL587izKkDgtqWAx5NHw&oe=6415CEE6">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 text-center">
                    {{-- <h2 class="title"> <span>Imprimantes 3D</span> Matériels et Accessoires </h2>
                    <a href="/produits" type="button" class="btn btn-primary text-capitalize m-auto active mt-100px">Nos produits</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Fashion Area End -->
    <!-- Feature product area start -->
    <div class="feature-product-area pb-100px pt-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">Offres disponibles</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, eum.</p>
                    </div>
                </div>
            </div>
            <div class="feature-product-slider swiper-container slider-nav-style-1">
                <div class="swiper-wrapper">
                    @foreach ($featured as $product)
                        <x-featured-products :featured_product="$product" />
                    @endforeach
                </div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature product area End -->

    @include('partials._Testimonials')
</x-Layout>
