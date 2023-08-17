@extends('components.admin-layout')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('extra-libs/multicheck/multicheck.css') }}">
    <link href="{{ asset('libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/product-list.css') }}" />
    <style>
        .buttons {
            text-align: right
        }

        .buttons button {
            margin-right: 1rem;
            margin-bottom: 1rem
        }
    </style>
@endsection

@section('title')
    Tarification
@endsection

@section('content')
    <div class="buttons">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-Modal">Ajouter une
            wilaya</button>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="zero_config" class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Code</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prix stop desk</th>
                            <th scope="col">Prix a domicile </th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($wilayas as $wilaya)
                            <tr>
                                <td>{{ $wilaya['code'] }}</td>
                                <td> {{ $wilaya['nom'] }}</td>
                                <td> {{ $wilaya['stop_desk'] }} </td>
                                <td> {{ $wilaya['domicile'] }} </td>
                                <td>
                                    <ul class="list-inline m-0">
                                        <li class="list-inline-item">
                                            <button class="btn btn-success btn-sm rounded-0" type="button"
                                                data-toggle="modal" data-target="#edit-Modal{{ $wilaya['id'] }}"
                                                data-toggle="modal">Modifier</button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button class="btn btn-danger btn-sm rounded-0" type="button"
                                                data-toggle="modal" data-target="#delete-Modal{{ $wilaya['id'] }}"
                                                title="Delete">Supprimer</button>
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

    @foreach ($wilayas as $wilaya)
        <div class="modal fade" id="edit-Modal{{ $wilaya['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Wilaya</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <form class="form-horizontal" method="POST" action="/admin/wilayas/{{ $wilaya->id }}">
                                @csrf
                                @method('PUT')
                                <div class="card-body" id="product-form">
                                    <h4 class="card-title">Modifier une wilaya</h4>

                                    <div class="form-group row mt-5">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">Code</label>
                                        <div class="col-sm-9">
                                            <input type="text"
                                                class="{{ $errors->has('code') ? 'form-control is-invalid' : 'form-control' }}"
                                                id="fname" placeholder="Code wilaya" name="code"
                                                value="{{ $wilaya['code'] }}">
                                            @error('code')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mt-5">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">Nom</label>
                                        <div class="col-sm-9">
                                            <input type="text"
                                                class="{{ $errors->has('nom') ? 'form-control is-invalid' : 'form-control' }}"
                                                id="fname" placeholder="Nom de la catégorie" name="nom"
                                                value="{{ $wilaya['nom'] }}">
                                            @error('nom')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mt-5">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Prix
                                            a domicile</label>
                                        <div class="col-sm-9">
                                            <input type="number"
                                                class="{{ $errors->has('domicile') ? 'form-control is-invalid' : 'form-control' }}"
                                                id="fname" placeholder="Nom de la catégorie" name="domicile"
                                                value="{{ $wilaya['domicile'] }}">
                                            @error('domicile')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mt-5">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">Prix
                                            stop desk</label>
                                        <div class="col-sm-9">
                                            <input type="number"
                                                class="{{ $errors->has('stop_desk') ? 'form-control is-invalid' : 'form-control' }}"
                                                id="fname" placeholder="prix" name="stop_desk"
                                                value="{{ $wilaya['stop_desk'] }}">
                                            @error('stop_desk')
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

        <div class="modal fade" id="delete-Modal{{ $wilaya['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="/admin/wilayas/{{ $wilaya->id }}" method="POST">
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
                            Attention ! Vous êtes sur le point de supprimer définitivement une wilaya. Cette action est
                            irréversible et supprimera toutes les sous informations associées a cette wilaya. Êtes-vous
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
    @endforeach

    <div class="modal fade" id="add-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Wilaya</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <form class="form-horizontal" method="POST" action="/admin/wilayas">
                            @csrf
                            <div class="card-body" id="product-form">
                                <h4 class="card-title">Ajouter une wilaya</h4>
                                <div class="form-group row mt-5">
                                    <label for="fname"
                                        class="col-sm-3 text-right control-label col-form-label">Code</label>
                                    <div class="col-sm-9">
                                        <input type="text"
                                            class="{{ $errors->has('code') ? 'form-control is-invalid' : 'form-control' }}"
                                            id="fname" placeholder="Code wilaya" name="code">
                                        @error('code')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mt-5">
                                    <label for="fname"
                                        class="col-sm-3 text-right control-label col-form-label">Nom</label>
                                    <div class="col-sm-9">
                                        <input type="text"
                                            class="{{ $errors->has('nom') ? 'form-control is-invalid' : 'form-control' }}"
                                            id="fname" placeholder="Nom de la wilaya" name="nom">
                                        @error('nom')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mt-5">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Prix a
                                        domicile</label>
                                    <div class="col-sm-9">
                                        <input type="number"
                                            class="{{ $errors->has('domicile') ? 'form-control is-invalid' : 'form-control' }}"
                                            id="fname" placeholder="prix stop desk" name="domicile">
                                        @error('domicile')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mt-5">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Prix
                                        stop desk</label>
                                    <div class="col-sm-9">
                                        <input type="number"
                                            class="{{ $errors->has('stop_desk') ? 'form-control is-invalid' : 'form-control' }}"
                                            id="fname" placeholder="prix a domicile" name="stop_desk">
                                        @error('stop_desk')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-success">Confirmer</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
    <script src="{{ asset('extra-libs/multicheck/jquery.multicheck.js') }}"></script>
    <script src="{{ asset('extra-libs/DataTables/datatables.min.js') }}"></script>

    @if (session('add_modal'))
        <script>
            $('#add-Modal').modal('show');
        </script>
    @endif

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
                "lengthMenu": "Afficher _MENU_ wilayas par page",
                "zeroRecords": "Aucune wilaya trouvé - désolé",
                "info": "Affichant la page _PAGE_ de _PAGES_ pages",
                "infoEmpty": "Pas de wilayas disponible",
                "infoFiltered": "(filtré a partir de _MAX_ total wilayas)",
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
