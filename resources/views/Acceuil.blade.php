<x-Layout>
    <x-slot name="css">
        <link rel="stylesheet" href="{{ asset('css/product-list.css') }}" />

        <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}" />

    </x-slot>
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
            <div class="category-slider">
                @foreach ($categories as $category)
                    <div class="single-banner nth-child-1 mx-3">
                        <img src="{{ $category->image ? asset('storage/' . $category->image . '') : asset('images/blank/blank-category.jpg') }}"
                            style="height:64vh" alt="">
                        <div class="banner-content nth-child-1">
                            <h3 class="title">{{ $category->nom }}</h3>
                            <a href="{{ route('products-display', ['category' => $category->id]) }}" class="shop-link"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                @endforeach
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
                            <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#newarrivals">Nouveau</button>
                            </li>
                            <li class="nav-item"><button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#toprated">A la une</button>
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
                                @foreach ($new as $product)
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
                                @foreach ($featured as $product)
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
    <div class="fashion-area" data-bg-image="{{ asset('images/my_images/banner/home_banner.png') }}">
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
                    </div>
                </div>
            </div>
            <div class="feature-product-slider swiper-container slider-nav-style-1">
                <div class="swiper-wrapper">
                    @foreach ($offered as $product)
                        <x-featured-products :featured_product="$product" />
                    @endforeach
                </div>
                <!-- Add Arrows -->
                @if (count($offered) > 2)
                    <div class="swiper-buttons">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Feature product area End -->

    @include('partials._Testimonials')

    <x-slot name="js">
        <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>

        <script>
            $(document).ready(function() {
                $('.category-slider').slick({
                    infinite: true,
                    slidesToShow: 2,
                    slidesToScroll: @json(intval(count($categories) / 2)),
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                $(".text-limit").each(function() {
                    var text = $(this).text();
                    var limit = 20;
                    var truncated = text.slice(0, limit);
                    if (text.length > limit) {
                        truncated += "...";
                    }
                    $(this).text(truncated);
                });
            });
        </script>
    </x-slot>
</x-Layout>
