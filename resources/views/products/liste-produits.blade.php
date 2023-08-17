<x-Layout>
    <x-slot name="css">
        <link rel="stylesheet" href="{{ asset('css/product-list.css') }}" />
    </x-slot>

    <div class="shop-category-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                    <!-- Shop Top Area Start -->

                    <!-- filter tags -->
                    <div class="mb-3">
                        @if ($search)
                            <span class="badge bg-primary px-3 py-2" style="font-size: 1rem">Recherche:
                                {{ $search }}
                                <a type="button" class="btn-close btn-sm" aria-label="Close"
                                    href="{{ route('products-display', [
                                        'sort_by' => 'nom',
                                        'sort_order' => 'asc',
                                        'brand' => $filter_brand,
                                        'category' => $filter_category,
                                        'subcategory' => $filter_subcategory,
                                        'finalcategory' => $filter_finalcategory,
                                        'min' => $min,
                                        'max' => $max,
                                    ]) }}"></a></span>
                        @endif

                        @if ($filter_category)
                            <span class="badge bg-primary px-3 py-2" style="font-size: 1rem"> {{ $category_name }}
                                <a type="button" class="btn-close btn-sm" aria-label="Close"
                                    href="{{ route('products-display', [
                                        'sort_by' => 'nom',
                                        'sort_order' => 'asc',
                                        'brand' => $filter_brand,
                                        // 'subcategory' => $filter_subcategory,
                                        'min' => $min,
                                        'max' => $max,
                                        'search' => $search,
                                    ]) }}"></a></span>
                        @endif
                        @if ($filter_subcategory)
                            <span class="badge bg-primary px-3 py-2" style="font-size: 1rem"> {{ $subcategory_name }}
                                <a type="button" class="btn-close btn-sm" aria-label="Close"
                                    href="{{ route('products-display', [
                                        'sort_by' => 'nom',
                                        'sort_order' => 'asc',
                                        'brand' => $filter_brand,
                                        'category' => $filter_category,
                                        'min' => $min,
                                        'max' => $max,
                                        'search' => $search,
                                    ]) }}"></a></span>
                        @endif
                        @if ($filter_finalcategory)
                            <span class="badge bg-primary px-3 py-2" style="font-size: 1rem"> {{ $finalcategory_name }}
                                <a type="button" class="btn-close btn-sm" aria-label="Close"
                                    href="{{ route('products-display', [
                                        'sort_by' => 'nom',
                                        'sort_order' => 'asc',
                                        'brand' => $filter_brand,
                                        'category' => $filter_category,
                                        'subcategory' => $filter_subcategory,
                                        'min' => $min,
                                        'max' => $max,
                                        'search' => $search,
                                    ]) }}"></a></span>
                        @endif
                        @if ($filter_brand)
                            <span class="badge bg-primary px-3 py-2" style="font-size: 1rem"> {{ $brand_name }}
                                <a type="button" class="btn-close btn-sm" aria-label="Close"
                                    href="{{ route('products-display', [
                                        'sort_by' => 'nom',
                                        'sort_order' => 'asc',
                                        'category' => $filter_category,
                                        'subcategory' => $filter_subcategory,
                                        'finalcategory' => $filter_finalcategory,
                                        'min' => $min,
                                        'max' => $max,
                                        'search' => $search,
                                    ]) }}"></a></span>
                        @endif
                        @if ($min != null && $max != null)
                            <span class="badge bg-primary px-3 py-2" style="font-size: 1rem"> Entre {{ $min }}
                                et {{ $max }} DA
                                <a type="button" class="btn-close btn-sm" aria-label="Close" class="btn-close btn-sm"
                                    aria-label="Close"
                                    href="{{ route('products-display', [
                                        'sort_by' => 'nom',
                                        'sort_order' => 'asc',
                                        'brand' => $filter_brand,
                                        'category' => $filter_category,
                                        'subcategory' => $filter_subcategory,
                                        'finalcategory' => $filter_finalcategory,
                                        'search' => $search,
                                    ]) }}"></a></span>
                        @endif
                    </div>

                    <div class="shop-top-bar d-flex">
                        <p class="compare-product"> <span>{{ $products->count() }}</span> Produits de
                            <span>{{ $products->total() }}</span>
                        </p>
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
                                <p>Trier:</p>
                            </div>
                            <!-- Single Wedge End -->
                            <div class="header-bottom-set dropdown">
                                <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown">
                                    {{ $sortBy == 'nom' && $sortOrder == 'asc'
                                        ? 'Par nom, A à Z'
                                        : ($sortBy == 'prix' && $sortOrder == 'asc'
                                            ? 'Par prix, bas à élevé'
                                            : ($sortBy == 'prix' && $sortOrder == 'desc'
                                                ? 'Par prix, élevé à bas'
                                                : 'Par nouveauté')) }}<i
                                        class="fa fa-angle-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('products-display', [
                                                'sort_by' => 'nom',
                                                'sort_order' => 'asc',
                                                'brand' => $filter_brand,
                                                'category' => $filter_category,
                                                'subcategory' => $filter_subcategory,
                                                'finalcategory' => $filter_finalcategory,
                                                'min' => $min,
                                                'max' => $max,
                                                'search' => $search,
                                            ]) }}">Nom,
                                            A à Z</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('products-display', [
                                                'sort_by' => 'prix',
                                                'sort_order' => 'asc',
                                                'brand' => $filter_brand,
                                                'category' => $filter_category,
                                                'subcategory' => $filter_subcategory,
                                                'finalcategory' => $filter_finalcategory,
                                                'min' => $min,
                                                'max' => $max,
                                                'search' => $search,
                                            ]) }}">Prix,
                                            bas à élevé</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('products-display', [
                                                'sort_by' => 'prix',
                                                'sort_order' => 'desc',
                                                'brand' => $filter_brand,
                                                'category' => $filter_category,
                                                'subcategory' => $filter_subcategory,
                                                'finalcategory' => $filter_finalcategory,
                                                'min' => $min,
                                                'max' => $max,
                                                'search' => $search,
                                            ]) }}">Prix,
                                            élevé à bas</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('products-display', [
                                                'sort_by' => 'created_at',
                                                'sort_order' => 'desc',
                                                'brand' => $filter_brand,
                                                'category' => $filter_category,
                                                'subcategory' => $filter_subcategory,
                                                'finalcategory' => $filter_finalcategory,
                                                'min' => $min,
                                                'max' => $max,
                                                'search' => $search,
                                            ]) }}">Par
                                            nouveauté</a></li>
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
                        {{ $products->appends([
                                'sort_by' => $sortBy,
                                'sort_order' => $sortOrder,
                                'brand' => $filter_brand,
                                'category' => $filter_category,
                                'subcategory' => $filter_subcategory,
                                'finalcategory' => $filter_finalcategory,
                                'min' => $min,
                                'max' => $max,
                                'search' => $search,
                            ])->links('components.custom-pagination') }}
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
                                    <li><a href="{{ route('products-display') }}" class="selected m-0"> Tous
                                            <span>({{ $total }})</span> </a></li>

                                    @foreach ($categories as $category)
                                        @if ($category->product_count > 0)
                                            <li>
                                                <a
                                                    href="{{ route('products-display', [
                                                        'sort_by' => $sortBy,
                                                        'sort_order' => $sortOrder,
                                                        'category' => $category->id,
                                                        'brand' => $filter_brand,
                                                        'min' => $min,
                                                        'max' => $max,
                                                        'search' => $search,
                                                    ]) }}">
                                                    {{ $category->nom }}
                                                    <span>({{ $category->product_count }})</span> </a>
                                                <a onclick="subcategories({{ $category->id }})"><i
                                                        class="fa fa-angle-down"></i></a>
                                                @if ($category->subcategory_count > 0)
                                                    <ul id="sub-cat{{ $category->id }}" class="subcategories-list"
                                                        style="display:none">
                                                        @foreach ($category->subcategories as $subcategory)
                                                            @if ($subcategory->product_count > 0)
                                                                <li class="subcategories-list">
                                                                    <a
                                                                        href="{{ route('products-display', [
                                                                            'sort_by' => $sortBy,
                                                                            'sort_order' => $sortOrder,
                                                                            'category' => $category->id,
                                                                            'subcategory' => $subcategory->id,
                                                                            'brand' => $filter_brand,
                                                                            'min' => $min,
                                                                            'max' => $max,
                                                                            'search' => $search,
                                                                        ]) }}">
                                                                        {{ $subcategory->nom }}
                                                                        {{-- <span>({{ $subcategory->product_count }})</span> --}}
                                                                    </a>
                                                                    <a
                                                                        onclick="finalcategories({{ $subcategory->id }})"><i
                                                                            class="fa fa-angle-down"></i></a>

                                                                    <ul id="final-cat{{ $subcategory->id }}"
                                                                        class="subcategories-list"
                                                                        style="display:none">
                                                                        @foreach ($subcategory->subcategories as $finalcategory)
                                                                            <li class="subcategories-list">
                                                                                <a
                                                                                    href="{{ route('products-display', [
                                                                                        'sort_by' => $sortBy,
                                                                                        'sort_order' => $sortOrder,
                                                                                        'category' => $category->id,
                                                                                        'subcategory' => $subcategory->id,
                                                                                        'finalcategory' => $finalcategory->id,
                                                                                        'brand' => $filter_brand,
                                                                                        'min' => $min,
                                                                                        'max' => $max,
                                                                                        'search' => $search,
                                                                                    ]) }}">
                                                                                    {{ $finalcategory->nom }}
                                                                                </a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->


                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Marques</h4>
                            <div class="sidebar-widget-brand">
                                <ul>
                                    @foreach ($brands as $brand)
                                        @if ($brand->product_count > 0)
                                            <li><a href="{{ route('products-display', [
                                                'sort_by' => $sortBy,
                                                'sort_order' => $sortOrder,
                                                'category' => $filter_category,
                                                'subcategory' => $filter_subcategory,
                                                'finalcategory' => $filter_finalcategory,
                                                'brand' => $brand->id,
                                                'min' => $min,
                                                'max' => $max,
                                                'search' => $search,
                                            ]) }}"
                                                    class="">
                                                    {{ $brand->nom }}<span>({{ $brand->product_count }})</span></a>
                                            </li>
                                        @endif
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->

                        <form action="{{ route('products-display') }}" method="GET">
                            @csrf
                            <div class="sidebar-widget mt-8">
                                <h4 class="sidebar-title">Filtrer les prix</h4>
                                <input type="hidden" name="category" value={{ $filter_category }}>
                                <input type="hidden" name="subcategory" value={{ $filter_subcategory }}>
                                <input type="hidden" name="finalcategory" value={{ $filter_finalcategory }}>
                                <input type="hidden" name="brand" value={{ $filter_brand }}>
                                <input type="hidden" name="search" value={{ $search }}>
                                <div class="price-input">
                                    <div class="field">
                                        <input type="number" class="input-min" name="min" value="0">
                                    </div>
                                    <div class="separator">-</div>
                                    <div class="field">
                                        <input type="number" class="input-max" name="max" name="max"
                                            value="{{ $max_price }}">
                                    </div>
                                </div>
                                <div class="slider">
                                    <div class="progress"></div>
                                </div>
                                <div class="range-input">
                                    <input type="range" class="range-min" min="0"
                                        max="{{ $max_price }}" value="0" step="10">
                                    <input type="range" class="range-max" min="0"
                                        max="{{ $max_price }}" value="{{ $max_price }}" step="10">
                                </div>
                                <div class="mt-5">
                                    <button type="submit" class="btn btn-primary"
                                        style="height:fit-content,padding:1rem">
                                        Filtrer par prix
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function subcategories(id) {
            if (document.getElementById("sub-cat" + id).style.display == "none") {
                document.getElementById("sub-cat" + id).style.display = "block";
            } else {
                document.getElementById("sub-cat" + id).style.display = "none";
            }
        }

        function finalcategories(id) {
            if (document.getElementById("final-cat" + id).style.display == "none") {
                document.getElementById("final-cat" + id).style.display = "block";
            } else {
                document.getElementById("final-cat" + id).style.display = "none";
            }
        }
    </script>
    <script src="{{ asset('js/slider.js') }}"></script>

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
