<x-Layout>
    <x-slot name="css">
        <style>
            .main-img {
                width: 100%;
                height: 675px;
                object-fit: cover;
            }
        </style>
    </x-slot>
    <!-- Product Details Area Start -->
    <div class="product-details-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                    <!-- Swiper -->
                    <div class="swiper-container zoom-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="main-img img-responsive m-auto"
                                    src={{ $product->image_principal ? asset('storage/' . $product->image_principal) : asset('images/blank/blank-category.jpg') }}
                                    alt="{{ $product->nom }}">
                                <a class="venobox full-preview" data-gall="myGallery"
                                    href={{ $product->image_principal ? asset('storage/' . $product->image_principal) : asset('images/blank/blank-category.jpg') }}>
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </a>
                            </div>
                            @foreach ($product->getMedia('images') as $image)
                                <div class="swiper-slide">
                                    <img class="main-img img-responsive m-auto" src={{ $image->getUrl() }}
                                        alt="">
                                    <a class="venobox full-preview" data-gall="myGallery" href={{ $image->getUrl() }}>
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-container mt-20px zoom-thumbs slider-nav-style-1 small-nav">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class=".main-img img-responsive m-auto"
                                    src={{ $product->image_principal ? asset('storage/' . $product->image_principal) : asset('images/blank/blank-category.jpg') }}
                                    alt="">
                            </div>
                            @foreach ($product->getMedia('images') as $image)
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src={{ $image->getUrl() }} alt="">
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
                <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-details-content quickview-content ml-25px">
                        <h2>{{ $product['nom'] }}</h2>
                        <div class="pricing-meta">
                            <ul class="d-flex">
                                @if ($product->offer)
                                    <li class="new-price" style="text-decoration: line-through; color:#B2B2B2">
                                        {{ intval($product['prix']) }} DA</li>
                                    <div style="font-size: 3rem" class="mx-1"> - </div>
                                @endif
                                <li class="new-price">
                                    {{ $product->offer ? intval($product['prix_vente']) : intval($product['prix']) }} DA
                                </li>
                            </ul>
                        </div>
                        <p class="mt-30px">{{ $product['description'] }}</p>
                        <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                            <span>Categories: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#">{{ $product->category->nom }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                            <span>Sous catégorie: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#">{{ $product->subcategory->nom }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                            <span>Marque: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#">{{ $product->brand->nom }}</a>
                                </li>
                            </ul>
                        </div>
                        <form method="POST" action="{{ route('addToCart', ['product_id' => $product->id]) }}">
                            @csrf
                            <div class="pro-details-quality">


                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="quantité" value="1" />
                                </div>
                                <div class="pro-details-cart">
                                    <button class="add-cart" type="submit"> Ajouter au Panier</button>
                                </div>

                                @if ($product->fichier_technique)
                                    <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                        <a href="{{ asset('storage/' . $product->fichier_technique) }}"><i
                                                class="pe-7s-download"></i></a>
                                    </div>
                                @endif
                            </div>
                        </form>
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
                                    <table class="property-list">
                                        @foreach ($product->properties as $property)
                                            <tr>
                                                <td>
                                                    {{ $property->nom }}
                                                </td>
                                                <td>
                                                    {{ $property->valeur }}
                                                </td>
                                            </tr>
                                        @endforeach

                                    </table>
                                </div>
                            </div>
                            <div id="des-details1" class="tab-pane active">
                                <div class="product-description-wrapper">
                                    <p>
                                        {{ $product->description }}
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
    @if ($product->url_video)
        <div class="video-presentation">
            <iframe src={{ Str::replaceFirst('watch?v=', 'embed/', $product->url_video) }} width="100%"
                height="100%" allowfullscreen></iframe>
        </div>
    @endif

    <!-- Product Area Start -->
    <div class="product-area related-product">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center m-0">
                        <h2 class="title">Produits Similaires</h2>
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
    <x-slot name="js">
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
