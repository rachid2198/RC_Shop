<x-Layout>
    <link rel="stylesheet" href="{{ asset('css/brands.css') }}" />

    <div class="main">
            <h2 class="title">Acheter par marque</h2>

            <!-- pagination -->
            <nav class="pagination-bar table-responsive">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">Tous</a></li>
                  @foreach (range('A', 'Z') as $letter)
                        <li class="page-item"><a class="page-link" href="#{{$letter}}">{{$letter}}</a></li>
                  @endforeach
                  <li class="page-item"><a class="page-link" href="#">#</a></li>
                </ul>
            </nav>

            <!-- les marques -->
            @foreach (range('A', 'Z') as $letter)
                <div class="brands-by-letter" id={{$letter}}>
                    <h3 class="letter-title">{{ $letter }}</h3>
                    <div>
                        <div class="row">
                            <div class="col-3 col-lg-3 col-sm-4 col-xs-6">
                                <a href="#" class="brand">Marque</a>
                            </div>
                            <div class="col-3 col-lg-3 col-sm-4 col-xs-6">
                                <a href="#" class="brand">Marque</a>
                            </div>
                            <div class="col-3 col-lg-3 col-sm-4 col-xs-6">
                                <a href="#" class="brand">Marque</a>
                            </div>
                            <div class="col-3 col-lg-3 col-sm-4 col-xs-6">
                                <a href="#" class="brand">Marque</a>
                            </div>
                            <div class="col-3 col-lg-3 col-sm-4 col-xs-6">
                                <a href="#" class="brand">Marque</a>
                            </div>
                            <div class="col-3 col-lg-3 col-sm-4 col-xs-6">
                                <a href="#" class="brand">Marque</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>
</x-Layout>
