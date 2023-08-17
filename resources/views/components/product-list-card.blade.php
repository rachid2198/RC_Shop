@props(['product'])

<div class="shop-list-wrapper mb-30px">
    <div class="row">
        <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
            <div class="product">
                <div class="thumb">
                    <a href='/produits/{{ $product['id'] }}' class="image">
                        <img src={{ $product->image_principal ? asset('storage/' . $product->image_principal) : asset('images/blank/blank-category.jpg') }}
                            alt="Product" />
                        <img class="hover-image"
                            src={{ $product->image_principal ? asset('storage/' . $product->image_principal) : asset('images/blank/blank-category.jpg') }}
                            alt="Product" />
                    </a>
                    <span class="badges">
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-lg-7 col-xl-8">
            <div class="content-desc-wrap">
                <div class="content">
                    <span class="category"><a href="#">{{ $product->category->nom }}</a></span>
                    <h5 class="title"><a class="text-limit"
                            href='/produits/{{ $product['id'] }}'>{{ $product['nom'] }}</a></h5>
                    <p>{{ $product['description'] }} </p>
                </div>
                <div class="box-inner">
                    <span class="price">
                        @if ($product->offer)
                            <span class="old">{{ intval($product['prix']) }} DA</span>
                        @endif
                        <span
                            class="new">{{ $product->offer ? intval($product['prix_vente']) : intval($product['prix']) }}
                            DA</span>
                    </span>
                    <div class="actions">
                        {{-- <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                            class="pe-7s-shopbag"></i></button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
