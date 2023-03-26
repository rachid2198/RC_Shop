@props(['product'])

{{-- <div {{$attributes->merge(['class'=>''])}}> --}}
    <!-- Single Prodect -->
    <div class="product">
        <div class="thumb">
            <a href='/produits/{{ $product["id"] }}' class="image">
                <img src={{$product['image']}} alt="Product" />
                <img class="hover-image" src={{$product['image']}} alt="Product" />
            </a>
        </div>
        <div class="content">
            <span class="category"><a href="#">{{$product['category']}}</a></span>
            <h5 class="title"><a href="single-product.html">{{$product['title']}}
                </a>
            </h5>
            <span class="price">
                <span class="new">{{$product['price']}} DA</span>
            </span>
        </div>
        <div class="actions">
            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                class="pe-7s-shopbag"></i></button>
            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
        </div>
    </div>