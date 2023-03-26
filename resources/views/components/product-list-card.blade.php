@props(['product'])

<div class="shop-list-wrapper mb-30px">
    <div class="row">
        <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
            <div class="product">
                <div class="thumb">
                    <a href="single-product.html" class="image">
                        <img src={{$product["image"]}} alt="Product" />
                        <img class="hover-image" src={{$product["image"]}} alt="Product" />
                    </a>
                    <span class="badges">
                    <span class="new">New</span>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-lg-7 col-xl-8">
            <div class="content-desc-wrap">
                <div class="content">
                    <span class="category"><a href="#">{{$product["category"]}}</a></span>
                    <h5 class="title"><a href="single-product.html">{{$product["title"]}}</a></h5>
                    <p>{{$product["description"]}} </p>
                </div>
                <div class="box-inner">
                    <span class="price">
                    <span class="new">{{$product["price"]}} DA</span>
                    </span>
                    <div class="actions">
                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                            class="pe-7s-shopbag"></i></button>
                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>