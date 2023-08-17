@extends('components.admin-layout')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('extra-libs/multicheck/multicheck.css') }}">
    <link href="{{ asset('libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
@endsection

@section('title')
    Commandes
@endsection

@section('content')
    <ul class="nav nav-tabs status-tabs">
        <li class="nav-item">
            <a class="{{ $status ? 'nav-link' : 'nav-link active' }}" aria-current="page"
                href="{{ route('orders-admin') }}">Tous</a>
        </li>
        <li class="nav-item">
            <a class="{{ $status == 'En cours de traitement' ? 'nav-link active' : 'nav-link' }}" aria-current="page"
                href="{{ route('orders-admin', ['status' => 'En cours de traitement']) }}">En cours de traitement</a>
        </li>
        <li class="nav-item">
            <a class="{{ $status == 'Confirmé' ? 'nav-link active' : 'nav-link' }}"
                href="{{ route('orders-admin', ['status' => 'Confirmé']) }}">Confirmé</a>
        </li>
        <li class="nav-item">
            <a class="{{ $status == 'Annulé' ? 'nav-link active' : 'nav-link' }}"
                href="{{ route('orders-admin', ['status' => 'Annulé']) }}">Annulé</a>
        </li>
    </ul>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="zero_config" class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" style="width: 1px">Nom</th>
                            <th scope="col" style="width: 1px">Prénom</th>
                            <th scope="col">Numéro</th>
                            <th scope="col">adresse</th>
                            <th scope="col" style="width: 1px">Statut</th>
                            <th scope="col" style="width: 1px">Type Livraison</th>
                            <th scope="col" style="width: 1px">Prix Livraison</th>
                            <th scope="col" style="width: 1px">Total</th>
                            <th scope="col">Date</th>
                            <th scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->nom }}</td>
                                <td>{{ $order->prenom }}</td>
                                <td>{{ $order->num_tel }}</td>
                                <td>{{ $order->adresse }}</td>
                                <td>
                                    <x-status :order="$order" />
                                </td>
                                <td>
                                    @if ($order->type_livraison == 'stop_desk')
                                        Stop desk
                                    @else
                                        A domicile
                                    @endif
                                </td>
                                <td>{{ intval($order->prix_livraison) }}</td>
                                <td>{{ intval($order->total) }}</td>
                                <td>{{ $order->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <ul class="list-inline m-0">
                                        <li class="list-inline-item">
                                            <button class="btn btn-info btn-sm rounded-0" type="button"
                                                data-toggle="modal" data-target="#view-Modal{{ $order['id'] }}"><i
                                                    class="fa fa-eye"></i></button>
                                        </li>

                                        <li class="list-inline-item">
                                            <a class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="modal"
                                                data-target="#status-Modal{{ $order['id'] }}"><i
                                                    class="fa fa-exchange-alt"></i></a>
                                        </li>

                                        <li class="list-inline-item">
                                            <a class="btn btn-success btn-sm rounded-0" type="button" data-toggle="modal"
                                                data-target="#edit-Modal{{ $order['id'] }}"><i class="fa fa-edit"></i></a>
                                        </li>

                                        <li class="list-inline-item">
                                            <button class="btn btn-danger btn-sm rounded-0" type="button"
                                                data-toggle="modal" data-target="#delete-Modal{{ $order['id'] }}"><i
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

    @foreach ($orders as $order)
        <div class="modal fade" id="edit-Modal{{ $order['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Commande</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <form class="form-horizontal" method="POST" action="/admin/commandes/{{ $order->id }}">
                                @csrf
                                @method('PUT')
                                <div class="card-body" id="product-form">
                                    <h4 class="card-title">Modifier une commande</h4>

                                    <div class="form-group row mt-5">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">Nom</label>
                                        <div class="col-sm-9">
                                            <input type="text"
                                                class="{{ $errors->has('nom') ? 'form-control is-invalid' : 'form-control' }}"
                                                id="fname" placeholder="Nom" name="nom"
                                                value="{{ $order['nom'] }}">
                                            @error('nom')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mt-5">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">Prénom</label>
                                        <div class="col-sm-9">
                                            <input type="text"
                                                class="{{ $errors->has('prenom') ? 'form-control is-invalid' : 'form-control' }}"
                                                id="fname" placeholder="Prénom" name="prenom"
                                                value="{{ $order['prenom'] }}">
                                            @error('prenom')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mt-5">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">Numéro de
                                            télephone</label>
                                        <div class="col-sm-9">
                                            <input type="text"
                                                class="{{ $errors->has('num_tel') ? 'form-control is-invalid' : 'form-control' }}"
                                                id="fname" placeholder="Numéro de téléphone" name="num_tel"
                                                value="{{ $order['num_tel'] }}">
                                            @error('num_tel')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mt-5">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">Adresse</label>
                                        <div class="col-sm-9">
                                            <input type="text"
                                                class="{{ $errors->has('adresse') ? 'form-control is-invalid' : 'form-control' }}"
                                                id="fname" placeholder="Adresse" name="adresse"
                                                value="{{ $order['adresse'] }}">
                                            @error('adresse')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
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

        <div class="modal fade" id="delete-Modal{{ $order['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="/admin/commandes/{{ $order->id }}" method="POST">
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
                            Attention ! Vous êtes sur le point de supprimer une commande définitivement. Cette action est
                            irréversible, Êtes-vous
                            sûr(e)
                            de vouloir
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

        <div class="modal fade" id="status-Modal{{ $order['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Commande</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <form class="form-horizontal" method="POST"
                                action="/admin/commandes/statut/{{ $order->id }}">
                                @csrf
                                <div class="card-body" id="product-form">
                                    <h4 class="card-title">Modifier le statut d'une commande</h4>

                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label col-form-label text-right">Statut</label>
                                        <div class="col-md-9">
                                            <select class="select2 form-control custom-select"
                                                style="width: 100%; height:36px;" name="statut">
                                                <option value="En cours de traitement">En cours de traitement </option>
                                                <option value="Confirmé">Confirmé </option>
                                                <option value="Annulé">Annulé </option>
                                            </select>
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

        <div class="modal fade" id="view-Modal{{ $order['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Commande</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                        </div>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Article</th>
                                                    <th scope="col">Quantité</th>
                                                    <th scope="col">Prix unitaire</th>
                                                    <th scope="col">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($order->articles as $item)
                                                    <tr>
                                                        <td>{{ $item->product->nom }} </td>
                                                        <td>{{ $item->quantity }}</td>
                                                        <td>{{ $item->product->prix }} DA</td>
                                                        <td> {{ $item->product->prix * $item->quantity }} DA</td>
                                                    </tr>
                                                @endforeach

                                                {{-- last column --}}
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Prix livraison: {{ $order->prix_livraison }} DA</td>
                                                    <td>Total: {{ $order->total }} DA</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('js')
    <script src="{{ asset('extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
    <script src="{{ asset('extra-libs/multicheck/jquery.multicheck.js') }}"></script>
    <script src="{{ asset('extra-libs/DataTables/datatables.min.js') }}"></script>

    @if (session('edit_modal'))
        <script>
            var id = {!! json_encode(session('id')) !!}
            $('#edit-Modal' + id).modal('show');
        </script>
    @endif

    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable({
            "language": {
                "lengthMenu": "Afficher _MENU_ commandes par page",
                "zeroRecords": "Aucune commande trouvé - désolé",
                "info": "Affichant la page _PAGE_ de _PAGES_ pages",
                "infoEmpty": "Pas de commandes disponible",
                "infoFiltered": "(filtré a partir de _MAX_ total commandes)",
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
