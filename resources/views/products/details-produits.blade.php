<x-Layout>
    <!-- Product Details Area Start -->
    <div class="product-details-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                    <!-- Swiper -->
                    <div class="swiper-container zoom-top">
                        <div class="swiper-wrapper">
                            @for ($i = 0; $i < 3; $i++)
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src={{ $product['image'] }} alt="">
                                    <a class="venobox full-preview" data-gall="myGallery" href={{ $product['image'] }}>
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </a>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="swiper-container mt-20px zoom-thumbs slider-nav-style-1 small-nav">
                        <div class="swiper-wrapper">
                            @for ($i = 0; $i < 3; $i++)
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src={{ $product['image'] }} alt="">
                                </div>
                            @endfor
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-details-content quickview-content ml-25px">
                        <h2>{{ $product['title'] }}</h2>
                        <div class="pricing-meta">
                            <ul class="d-flex">
                                <li class="new-price">{{ $product['price'] }} DA</li>
                            </ul>
                        </div>
                        <p class="mt-30px">{{ $product['description'] }}</p>
                        <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                            <span>Categories: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#">{{ $product['category'] }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                            <span>Tags: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#">Eléctroniques, </a>
                                </li>
                                <li>
                                    <a href="#">Accessoires</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-details-quality">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                            </div>
                            <div class="pro-details-cart">
                                <button class="add-cart"> Ajouter au Panier</button>
                            </div>
                            <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                <a href="{{asset('files/fiche-technique.pdf')}}"><i class="pe-7s-download"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- product details description area start -->
                    <div class="description-review-wrapper">
                        <div class="description-review-topbar nav">
                            <button data-bs-toggle="tab" data-bs-target="#des-details2">Information</button>
                            <button class="active" data-bs-toggle="tab"
                                data-bs-target="#des-details1">Description</button>
                        </div>
                        <div class="tab-content description-review-bottom">
                            <div id="des-details2" class="tab-pane">
                                <div class="product-anotherinfo-wrapper text-start">
                                    <ul>
                                        <li><span>Volume d'impression</span> 199.1 oz./1,6 gal./5,9 L</li>
                                        <li><span>Écran d'exposition</span>9,25'' monochrome</li>
                                        <li><span>Surface d'écran</span> 38,22 in² / 248,75 cm²</li>
                                        <li><span>Poids de la machine</span> 24,3 lb / 11 kg
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="des-details1" class="tab-pane active">
                                <div class="product-description-wrapper">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius tempor
                                        incidid ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip efgx ea co consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                        nulla pariatur. Excepteur sint occae cupidatat non proident, sunt in culpa qui
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details description area end -->
                </div>
            </div>
        </div>
    </div>

    <!--youtube video --->
    <div class="video-presentation">
        <iframe src="https://www.youtube.com/embed/6wBrgs2j8JY" width="100%" height="100%" allowfullscreen></iframe>
    </div>

    <!-- Product Area Start -->
    <div class="product-area related-product">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center m-0">
                        <h2 class="title">Produits Similaires</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, magnam.</p>
                    </div>
                </div>
            </div>
            <!-- Section Title & Tab End -->
            <div class="row">
                <div class="col">
                    <div class="new-product-slider swiper-container slider-nav-style-1">
                        <div class="swiper-wrapper">
                            @foreach ($related_products as $product)
                                <div class="swiper-slide">
                                    <x-product-card :product="$product" />
                                </div>
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
        </div>
    </div>
</x-Layout>
