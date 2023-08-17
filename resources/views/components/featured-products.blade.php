@props(['featured_product'])

<div class="swiper-slide feature-right-content" style="height: 40vh">
    <div class="image-side">
        <img class="img-responsive" src={{ $featured_product->image_principal ? asset('storage/' . $featured_product->image_principal) : asset('images/blank/blank-category.jpg') }} alt="">
        {{-- <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
            class="pe-7s-shopbag"></i></button> --}}
    </div>
    <div class="content-side">
        <div class="prize-content">
            <h5 class="title"><a href="/produits/{{$featured_product['id']}}">{{$featured_product['nom']}}</a></h5>
            <span class="price">
        <span class="old">{{$featured_product["prix"]}} DA</span>
            <span class="new">{{$featured_product["prix_vente"]}} DA</span>
            </span>
        </div>
        {{-- <div class="product-feature">
            <ul>
                <li>Predecessor : <span>None.</span></li>
                <li>Support Type : <span>Neutral.</span></li>
                <li>Cushioning : <span>High Energizing.</span></li>
                <li>Total Weight : <span> 300gm</span></li>
            </ul>
        </div> --}}
    </div>
</div>