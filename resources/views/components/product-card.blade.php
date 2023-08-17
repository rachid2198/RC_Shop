@props(['product'])

{{-- <div {{$attributes->merge(['class'=>''])}}> --}}
<!-- Single Prodect -->
<div class="product">
    <div class="thumb">
        <a href='/produits/{{ $product['id'] }}' class="image">
            <img src={{ $product->image_principal ? asset('storage/' . $product->image_principal) : asset('images/blank/blank-category.jpg') }}
                alt="Product" />
            <img class="hover-image"
                src={{ $product->image_principal ? asset('storage/' . $product->image_principal) : asset('images/blank/blank-category.jpg') }}
                alt="Product" />
        </a>
    </div>
    <div class="content">
        <span class="category"><a href="#">{{ $product->category->nom }}</a></span>
        <h5 class="title"><a class="text-limit" href='/produits/{{ $product['id'] }}'>{{ $product['nom'] }}
            </a>
        </h5>
        <span class="price">
            @if ($product->offer)
                <span class="old">{{ intval($product['prix']) }} DA</span>
            @endif
            <span class="new">{{ $product->offer ? intval($product['prix_vente']) : intval($product['prix']) }} DA</span>
        </span>
    </div>
    <div class="actions">
        {{-- <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
            data-bs-target="#Modal-Cart{{$product->id}}"><i class="pe-7s-shopbag"></i></button> --}}
    </div>
</div>
