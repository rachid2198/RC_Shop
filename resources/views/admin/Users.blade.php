@extends('components.admin-layout')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('extra-libs/multicheck/multicheck.css') }}">
    <link href="{{ asset('libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">

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
    Utilisateurs
@endsection

@section('content')
    <div class="buttons">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-Modal">Ajouter un
            administrateur</button>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="zero_config" class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Email</th>
                            <th scope="col">date de création</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user['name'] }}</td>
                                <td>{{ $user['email'] }}</td>
                                <td>{{ $user['created_at']->toDateString() }}</td>
                                <td>
                                    <ul class="list-inline m-0">
                                        <li class="list-inline-item">
                                            <button class="btn btn-success btn-sm rounded-0" type="button"
                                                data-toggle="modal"
                                                data-target="#edit-Modal{{ $user['id'] }}">Modifier</button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button class="btn btn-danger btn-sm rounded-0" type="button"
                                                data-toggle="modal" data-target="#delete-Modal{{ $user['id'] }}">
                                                Supprimer</i></button>
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

    @foreach ($users as $user)
        <div class="modal fade" id="edit-Modal{{ $user['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Utilisateurs</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <form class="form-horizontal" method="POST" action="/admin/utilisateurs/{{ $user->id }}">
                                @csrf
                                @method('PUT')
                                <div class="card-body" id="product-form">
                                    <h4 class="card-title">Modifier un utilisateur</h4>
                                    <div class="form-group row mt-5">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">Nom</label>
                                        <div class="col-sm-9">
                                            <input type="text"
                                                class="{{ $errors->has('name') ? 'form-control is-invalid' : 'form-control' }}"
                                                id="fname" placeholder="Nom...." value="{{ $user['name'] }}"
                                                name="name">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mt-5">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email"
                                                class="{{ $errors->has('email') ? 'form-control is-invalid' : 'form-control' }}"
                                                id="fname" placeholder="Email..." value="{{ $user['email'] }}"
                                                name="email">
                                            @error('email')
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

        <div class="modal fade" id="delete-Modal{{ $user['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="/admin/utilisateurs/{{$user->id}}" method="POST">
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
                            Attention ! Vous êtes sur le point de supprime un utilisateur définitivement. Cette action est
                            irréversible. Êtes-vous sûr(e) de vouloir
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
                    <h5 class="modal-title" id="exampleModalLabel">Utilisateurs</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <form class="form-horizontal" method="POST" action="/admin/utilisateurs">
                            @csrf
                            <div class="card-body" id="product-form">
                                <h4 class="card-title">Ajouter un utilisateur</h4>
                                <div class="form-group row mt-5">
                                    <label for="fname"
                                        class="col-sm-3 text-right control-label col-form-label">Nom</label>
                                    <div class="col-sm-9">
                                        <input type="text"
                                            class="{{ $errors->has('name') ? 'form-control is-invalid' : 'form-control' }}"
                                            id="fname" placeholder="Nom...." name="name" value="{{old('name')}}">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group row mt-5">
                                    <label for="fname"
                                        class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email"
                                            class="{{ $errors->has('email') ? 'form-control is-invalid' : 'form-control' }}"
                                            id="fname" placeholder="Email..." name="email" value="{{old('email')}}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mt-5">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Mot de
                                        passe</label>
                                    <div class="col-sm-9">
                                        <input type="password"
                                            class="{{ $errors->has('password') ? 'form-control is-invalid' : 'form-control' }}"
                                            id="lname" placeholder="Mot de passe..." name="password">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mt-5">
                                    <label for="lname"
                                        class="col-sm-3 text-right control-label col-form-label">Confirmer le mot de
                                        passe</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="lname"
                                            placeholder="Répeter le mot de passe.." name="password_confirmation">
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
                "lengthMenu": "Afficher _MENU_ utilisateurs par page",
                "zeroRecords": "Aucune utilisateur trouvé - désolé",
                "info": "Affichant la page _PAGE_ de _PAGES_ pages",
                "infoEmpty": "Pas de utilisateurs disponible",
                "infoFiltered": "(filtré a partir de _MAX_ total utilisateurs)",
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
