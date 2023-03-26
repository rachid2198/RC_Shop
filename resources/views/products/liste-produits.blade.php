<x-Layout>
    <link rel="stylesheet" href="{{ asset('css/product-list.css') }}" />

    <div class="shop-category-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        <p class="compare-product"> <span>12</span> Produits de <span>30</span></p>
                        <!-- Left Side End -->
                        <div class="shop-tab nav">
                            <button class="active" data-bs-target="#shop-grid" data-bs-toggle="tab">
                                <i class="fa fa-th" aria-hidden="true"></i>
                            </button>
                            <button data-bs-target="#shop-list" data-bs-toggle="tab">
                                <i class="fa fa-list" aria-hidden="true"></i>
                            </button>
                        </div>
                        <!-- Right Side Start -->
                        <div class="select-shoing-wrap d-flex align-items-center">
                            <div class="shot-product">
                                <p>Sort By:</p>
                            </div>
                            <!-- Single Wedge End -->
                            <div class="header-bottom-set dropdown">
                                <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown">Default <i
                                        class="fa fa-angle-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="#">Name, A to Z</a></li>
                                    <li><a class="dropdown-item" href="#">Name, Z to A</a></li>
                                    <li><a class="dropdown-item" href="#">Price, low to high</a></li>
                                    <li><a class="dropdown-item" href="#">Price, high to low</a></li>
                                    <li><a class="dropdown-item" href="#">Sort By new</a></li>
                                    <li><a class="dropdown-item" href="#">Sort By old</a></li>
                                </ul>
                            </div>
                            <!-- Single Wedge Start -->
                        </div>
                        <!-- Right Side End -->
                    </div>
                    <!-- Shop Top Area End -->
                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">
                        <!-- Tab Content Area Start -->
                        <div class="row">
                            <div class="col">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="shop-grid">
                                        <div class="row mb-n-30px">
                                            @foreach ($products as $product)
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    <x-product-card :product="$product" />
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade mb-n-30px" id="shop-list">
                                        @foreach ($products as $product)
                                            <x-product-list-card :product="$product" />
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Content Area End -->
                        <!--  Pagination Area Start -->
                        <div class="pro-pagination-style text-center text-lg-end" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="pages">
                                <ul>
                                    <li class="li"><a class="page-link" href="#"><i
                                                class="fa fa-angle-left"></i></a>
                                    </li>
                                    <li class="li"><a class="page-link" href="#">1</a></li>
                                    <li class="li"><a class="page-link active" href="#">2</a></li>
                                    <li class="li"><a class="page-link" href="#">3</a></li>
                                    <li class="li"><a class="page-link" href="#"><i
                                                class="fa fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="col-lg-3 order-lg-first col-md-12 order-md-last">
                    <div class="shop-sidebar-wrap">
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Categories</h4>
                            <div class="sidebar-widget-category">
                                <ul>
                                    <li><a href="#" class="selected m-0"> Tous
                                            <span>(65)</span> </a></li>
                                    <li><a href="#" class=""> Imprimante 3d 
                                            <span>(12)</span> </a> 
                                            <a onclick="subcategories()"><i class="fa fa-angle-down"></i></a>
                                            <ul id="sub-cat1" class="subcategories-list" style="display:block">
                                                <li><a href="#">Photon</a></a></li>
                                                <li><a href="#">Anycubic</a></a></li>
                                                <li><a href="#">Dremel</a></a></li>
                                                <li><a href="#">Elegoo</a></a></li>
                                            </ul>     
                                    </li>
                                    <li><a href="#" class=""> Batterie
                                            <span>(22)</span> </a></li>
                                    <li><a href="#" class=""> Hélics
                                            <span>(19)</span> </a></li>
                                    <li><a href="#" class=""> Moteurs
                                            <span>(17)</span> </a></li>
                                    <li><a href="#" class=""> ESC
                                            <span>(7)</span> </a></li>
                                    <li><a href="#" class=""> RC Control
                                            <span>(9)</span> </a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget mt-8">
                            <h4 class="sidebar-title">Filtrer les prix</h4>
                            <div class="price-input">
                                <div class="field">
                                    <input type="number" class="input-min" value="2500">
                                </div>
                                <div class="separator">-</div>
                                <div class="field">
                                    <input type="number" class="input-max" value="7500">
                                </div>
                            </div>
                            <div class="slider">
                                <div class="progress"></div>
                            </div>
                            <div class="range-input">
                                <input type="range" class="range-min" min="0" max="10000" value="2500"
                                    step="100">
                                <input type="range" class="range-max" min="0" max="10000"
                                    value="7500" step="100">
                            </div>
                        </div>

                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Marques</h4>
                            <div class="sidebar-widget-brand">
                                <ul>
                                    <li><a href="#" class="selected m-0"> Anycubic<span>(65)</span> </a></li>
                                    <li><a href="#" class=""> Creality3D <span>(14)</span></a></li>
                                    <li><a href="#" class=""> Dremel <span>(21)</span></a></li>
                                    <li><a href="#" class=""> Elegoo <span>(16)</span></a></li>
                                    <li><a href="#" class=""> CraftBot<span>(12)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function subcategories(){
            if(document.getElementById("sub-cat1").style.display=="none"){
                document.getElementById("sub-cat1").style.display="block";
            }else{
                document.getElementById("sub-cat1").style.display="none";
            }
        }
    </script>
    <script src="{{ asset('js/slider.js') }}"></script>
</x-Layout>
