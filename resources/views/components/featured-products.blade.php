@props(['featured_product'])

<div class="swiper-slide feature-right-content">
    <div class="image-side">
        <img src={{$featured_product['image']}} alt="">
        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
            class="pe-7s-shopbag"></i></button>
    </div>
    <div class="content-side">
        <div class="deal-timing">
            <span>End In:</span>
            <div data-countdown="2021/09/15"></div>
        </div>
        <div class="prize-content">
            <h5 class="title"><a href="/produits/{{$featured_product['id']}}">{{$featured_product['title']}}</a></h5>
            <span class="price">
        <span class="old">{{$featured_product["price"]}} DA</span>
            <span class="new">{{$featured_product["price"]*80/100}} DA</span>
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