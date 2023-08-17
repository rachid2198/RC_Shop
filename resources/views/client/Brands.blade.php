<x-Layout>
    <x-slot name="css">
        <link rel="stylesheet" href="{{ asset('css/brands.css') }}" />

        <style>
            .card-img-top{
                height: 300px;
                width: 100%;
                object-fit: cover
            }
        </style>

    </x-slot>
    <div class="main">
        <h2 class="title">Acheter par marque</h2>

        <div class="container mb-5">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($brands as $brand)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ $brand->image ? asset('storage/' . $brand->image) : asset('images/blank/blank-category.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center"><a href="{{ route('products-display', ['brand' => $brand->id]) }}">{{$brand->nom}} <span>({{$brand->product_count}})</span></a></h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

        <x-slot name="js">
        </x-slot>
</x-Layout>
