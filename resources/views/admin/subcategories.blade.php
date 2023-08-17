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

        .buttons button,
        .button-link {
            margin-right: 1rem;
            margin-bottom: 1rem
        }
    </style>
@endsection

@section('title')
    Catégorie: {{ $parentCategory['nom'] }}
@endsection

@section('content')
    <div class="buttons">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-Modal">Ajouter une
            sous-catégorie</button>
        <a class="btn btn-primary button-link" type="button" href="/admin/categories">
            Retourner a la page des catégories</a>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="zero_config" class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subcategories as $categorie)
                            <tr>
                                <td>{{ $categorie['nom'] }}</td>
                                <td>
                                    <ul class="list-inline m-0">
                                        <li class="list-inline-item">
                                            <button class="btn btn-success btn-sm rounded-0" type="button"
                                                data-toggle="modal" data-target="#edit-Modal{{ $categorie['id'] }}"
                                                data-toggle="modal">Modifier</button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button class="btn btn-danger btn-sm rounded-0" type="button"
                                                data-toggle="modal" data-target="#delete-Modal{{ $categorie['id'] }}"
                                                title="Delete">Supprimer</i></button>
                                        </li>

                                        <li class="list-inline-item">
                                            <a class="btn btn-primary btn-sm rounded-0" type="button"
                                                href="/admin/subcategories/{{ $categorie['id'] }}">
                                                Liste des sous-catégories</a>
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

    @foreach ($subcategories as $category)
        <div class="modal fade" id="edit-Modal{{ $category['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Catégorie</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <form class="form-horizontal" method="POST"
                                action="/admin/subcategories/{{ $category->id }}">
                                @csrf
                                @method('PUT')
                                <div class="card-body" id="product-form">
                                    <h4 class="card-title">Modifier une catégorie</h4>

                                    <div class="form-group row mt-5">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">Nom</label>
                                        <div class="col-sm-9">
                                            <input type="text"
                                                class="{{ $errors->has('nom') ? 'form-control is-invalid' : 'form-control' }}"
                                                id="fname" placeholder="Nom de la catégorie" name="nom"
                                                value="{{ $category->nom }}">

                                            @error('nom')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
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

        <div class="modal fade" id="delete-Modal{{ $category['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="/admin/subcategories/{{ $category->id }}" method="POST">
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
                            Attention ! Vous êtes sur le point de supprimer définitivement une catégorie. Cette action est
                            irréversible. Êtes-vous sûr(e)
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
                    <h5 class="modal-title" id="exampleModalLabel">Sous Catégorie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <form class="form-horizontal" method="POST" action="/admin/subcategories">
                            @csrf
                            <div class="card-body" id="product-form">
                                <h4 class="card-title">Ajouter une sous-catégorie</h4>
                                <div class="form-group row mt-5">
                                    <label for="fname"
                                        class="col-sm-3 text-right control-label col-form-label">Nom</label>
                                    <div class="col-sm-9">
                                        <input type="text"
                                            class="{{ $errors->has('nom') ? 'form-control is-invalid' : 'form-control' }}"
                                            id="fname" placeholder="Nom de la catégorie" name="nom">

                                        <input type="hidden" name="parent" value={{ $parentCategory['id'] }}>

                                        @error('nom')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
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
                "lengthMenu": "Afficher _MENU_ catégories par page",
                "zeroRecords": "Aucune catégorie trouvé - désolé",
                "info": "Affichant la page _PAGE_ de _PAGES_ pages",
                "infoEmpty": "Pas de catégories disponible",
                "infoFiltered": "(filtré a partir de _MAX_ total catégoriess)",
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
