@extends('components.admin-layout')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('extra-libs/multicheck/multicheck.css') }}">
    <link href="{{ asset('libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/add-product.css') }}">
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <style>
        .image-produit {
            max-width: 6vw;
            max-height: 6vh;
            height: auto;
        }

        .modal-dialog {
            width: 60vw;
        }

        .buttons {
            text-align: right
        }

        .buttons button {
            margin-right: 1rem;
            margin-bottom: 1rem
        }

        .categories-form {
            margin-top: 3rem;
            margin-bottom: 3rem;
        }

        .categories-form-first {
            margin-bottom: 3rem;
        }
    </style>
@endsection

@section('title')
    Produits
@endsection

@section('content')
    <div class="buttons">
        {{-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteAll-Modal">Supprimer les
            éléments sélectionnés</button> --}}
    </div>
    <div class="card">
        <div class="card-body">
            {{-- <h5 class="card-title">Basic Datatable</h5> --}}
            <div class="table-responsive">
                <table id="zero_config" class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>
                                {{-- <label class="customcheckbox m-b-20">
                                    <input type="checkbox" id="mainCheckbox" />
                                    <span class="checkmark"></span>
                                </label> --}}
                                A la une
                            </th>
                            <th scope="col" style="width: 1px">image</th>
                            <th scope="col" style="width: 1px">Nom</th>
                            <th scope="col" style="width: 1px">Catégorie</th>
                            <th scope="col" style="width: 1px">Marque</th>
                            <th scope="col" style="width: 1px">Prix</th>
                            <th scope="col" style="width: 1px">Prix Promotion</th>
                            <th scope="col" style="width: 1px">Quantité</th>
                            <th scope="col">Publié en</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="customtable">
                        @foreach ($products as $product)
                            <tr>
                                <th>
                                    <label class="customcheckbox">
                                        <input type="checkbox" id="featured{{ $product->id }}"
                                            onclick="add_featured({{ $product->id }})"
                                            @if ($product->featured) checked @endif class="listCheckbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </th>
                                <td><img class="image-produit"
                                        src="{{ $product->image_principal ? asset('storage/' . $product->image_principal) : asset('images/blank/blank-category.jpg') }}"
                                        alt="image produit" /></td>
                                <td><a href="/produits/{{ $product->id }}" class="text-limit"> {{ $product['nom'] }} </a>
                                </td>
                                <td> {{ $product->category->nom }}</td>
                                <td>{{ $product->brand->nom }}</td>
                                <td>{{ intval($product['prix']) }} </td>
                                <td>{{ intval($product['prix_vente']) }}</td>
                                <td>{{ $product['stock'] }}</td>
                                <td>{{ $product['created_at']->format('Y-m-d') }}</td>
                                <td>
                                    <ul class="list-inline m-0">
                                        <li class="list-inline-item">
                                            <a href="/admin/modifier-produit/{{ $product->id }}"
                                                class="btn btn-success btn-sm rounded-0" type="button"
                                                {{-- data-toggle="modal" data-target="#edit-Modal{{ $product['id'] }}" --}}><i class="fa fa-edit"></i></a>
                                        </li>

                                        <li class="list-inline-item">
                                            <button class="{{$product->offer? 'btn btn-warning btn-sm rounded-0':'btn btn-secondary btn-sm rounded-0'}}" type="button" data-toggle="modal"
                                                data-target="#promotion-Modal{{ $product['id'] }}"><i
                                                    class="fa fa-tags"></i></button>
                                        </li>

                                        <li class="list-inline-item">
                                            <button class="btn btn-danger btn-sm rounded-0" type="button"
                                                data-toggle="modal" data-target="#delete-Modal{{ $product['id'] }}"><i
                                                    class="fa fa-trash"></i></button>
                                        </li>

                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @foreach ($products as $product)
        <div class="modal fade" id="promotion-Modal{{ $product['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Promotion</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <form class="form-horizontal" method="POST"
                                action="/admin/liste-produits/promotion/{{ $product->id }}">
                                @csrf
                                @method('PUT')
                                <div class="card-body" id="product-form">
                                    <h4 class="card-title">Ajouter une promotion</h4>

                                    <div class="form-group row mt-5">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Prix
                                            actuel</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder=""
                                                name="prix" value="{{ $product->prix }}" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row mt-5">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">Prix promotion</label>
                                        <div class="col-sm-9">
                                            <input type="text"
                                                class="{{ $errors->has('prix_vente') ? 'form-control is-invalid' : 'form-control' }}"
                                                id="fname" placeholder="" name="prix_vente"
                                                value="{{ $product->prix_vente }}">

                                            @error('prix_vente')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mt-5">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">Activé</label>
                                        <div class="col-sm-9">
                                            <label class="customcheckbox">
                                                <input type="checkbox" name="offer" {{$product->offer? 'checked':''}}
                                                    class="listCheckbox" />
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Annuler</button>
                                    <button type="submit" class="btn btn-success">Confirmer</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="delete-Modal{{ $product['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="/admin/liste-produits/{{ $product->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Avertissement!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Attention ! Vous êtes sur le point de supprimer définitivement un produit. Cette action est
                            irréversible et supprimera toutes les données associées à ce produit. Êtes-vous sûr(e) de
                            vouloir
                            continuer ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-primary">Supprimer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach

@endsection

@section('js')
    <script src="{{ asset('extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
    <script src="{{ asset('extra-libs/multicheck/jquery.multicheck.js') }}"></script>
    <script src="{{ asset('extra-libs/DataTables/datatables.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script> --}}

    <script>
        function add_featured(id) {
            $.ajax({
                url: "/feature-product/" + id,
                method: 'POST',
                data: {},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        }

        function offer_product(id) {
            $.ajax({
                url: "/offer-product/" + id,
                method: 'POST',
                data: {},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        }

        $(document).ready(function() {
            $(".text-limit").each(function() {
                var text = $(this).text();
                var limit = 30;
                var truncated = text.slice(0, limit);
                if (text.length > limit) {
                    truncated += "...";
                }
                $(this).text(truncated);
            });
        });

        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable({
            "language": {
                "lengthMenu": "Afficher _MENU_ produits par page",
                "zeroRecords": "Aucun produit trouvé - désolé",
                "info": "Affichant la page _PAGE_ de _PAGES_ pages",
                "infoEmpty": "Pas de produits disponible",
                "infoFiltered": "(filtré a partir de _MAX_ total produits)",
                "search": "Recherche:",
                "paginate": {
                    "first": "Premiér",
                    "last": "Dérnier",
                    "next": "Suivante",
                    "previous": "Précedente"
                },
            }
        });
    </script>
@endsection
