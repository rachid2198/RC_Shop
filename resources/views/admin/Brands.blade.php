@extends('components.admin-layout')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('extra-libs/multicheck/multicheck.css') }}">
    <link href="{{ asset('libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">

    <style>
        .brand_image {
            width: 4vw;
            height: auto;
        }

        .buttons {
            text-align: right
        }

        .buttons button {
            margin-right: 1rem;
            margin-bottom: 1rem
        }

        .image-form {
            position: relative;
            display: inline-block;
        }

        .image-form img {
            display: block;
            width: 12vw;
            height: 12vw;
            border-radius: 5%;
            object-fit: cover;
            cursor: pointer;
            transition: opacity 0.3s ease-in-out;
        }

        .image-form img:hover {
            opacity: 0.8;
        }

        .image-form input[type="file"] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }
    </style>
@endsection

@section('title')
    Marques
@endsection

@section('content')
    <div class="buttons">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-Modal">Ajouter une
            Marque</button>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="zero_config" class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Image</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brands as $brand)
                            <tr>
                                <td>{{ $brand['nom'] }}</td>
                                <td> <img class="brand_image"
                                        src="{{ $brand->image ? asset('storage/' . $brand->image) : asset('images/blank/blank-category.jpg') }}"
                                        alt="image">
                                </td>
                                <td>
                                    <ul class="list-inline m-0">
                                        <li class="list-inline-item">
                                            <button class="btn btn-success btn-sm rounded-0" type="button"
                                                data-toggle="modal"
                                                data-target="#edit-Modal{{ $brand['id'] }}">Modifier</button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button class="btn btn-danger btn-sm rounded-0" type="button"
                                                data-toggle="modal" data-target="#delete-Modal{{ $brand['id'] }}">
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

    @foreach ($brands as $brand)
        <div class="modal fade" id="edit-Modal{{ $brand['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Marque</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <form class="form-horizontal" method="POST" action="/admin/marques/{{ $brand->id }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body" id="product-form">
                                    <h4 class="card-title">Modifier une marque</h4>

                                    <div class="form-group row mt-5">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">Image</label>
                                        <div class="col-sm-9 image-form">
                                            <img src="{{ $brand->image ? asset('storage/' . $brand->image) : asset('images/blank/blank-category.jpg') }}"
                                                onclick="clickfileinput({{ $brand['id'] }})" alt="Click to upload"
                                                id="editMarque-image{{ $brand['id'] }}">

                                            <input type="file"
                                                class="{{ $errors->has('image') ? 'form-control is-invalid' : 'form-control' }}"
                                                id="editMarque-image-input{{ $brand['id'] }}" name="image"
                                                onchange="changeImage({{ $brand['id'] }})" style="display:none;">

                                            @error('image')
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
                                                value="{{ $brand['nom'] }}">
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

        <div class="modal fade" id="delete-Modal{{ $brand['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="/admin/marques/{{ $brand->id }}" method="POST">
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
                            Attention ! Vous êtes sur le point de supprimer une marque définitivement. Cette action est
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
    @endforeach

    <div class="modal fade" id="add-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Marque</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <form class="form-horizontal" method="POST" action="/admin/marques"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body" id="product-form">
                                <h4 class="card-title">Ajouter une marque</h4>
                                <div class="form-group row mt-5">
                                    <label for="fname"
                                        class="col-sm-3 text-right control-label col-form-label">Image</label>
                                    <div class="col-sm-9 image-form">
                                        <img src="{{ asset('images/blank/blank-category.jpg') }}" alt="Click to upload"
                                            id="marque-image">
                                        <input type="file"
                                            class="{{ $errors->has('image') ? 'form-control is-invalid' : 'form-control' }}"
                                            id="marque-image-input" name="image" style="display:none;">
                                        @error('image')
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
                                            id="fname" placeholder="Nom de la marque" name="nom">

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
                "lengthMenu": "Afficher _MENU_ marques par page",
                "zeroRecords": "Aucune marque trouvé - désolé",
                "info": "Affichant la page _PAGE_ de _PAGES_ pages",
                "infoEmpty": "Pas de marques disponible",
                "infoFiltered": "(filtré a partir de _MAX_ total marques)",
                "search": "Recherche:",
                "paginate": {
                    "first": "Premiér",
                    "last": "Dérnier",
                    "next": "Suivante",
                    "previous": "Précedente"
                },
            }
        });

        function clickfileinput(id) {
            const fileInput = document.getElementById("editMarque-image-input" + id);
            fileInput.click();
        }

        function changeImage(id) {
            const edit_image = document.getElementById("editMarque-image" + id);
            const edit_fileInput = document.getElementById("editMarque-image-input" + id);

            const file = edit_fileInput.files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function() {
                edit_image.setAttribute("src", reader.result);
            });

            reader.readAsDataURL(file);
        }

        const image = document.getElementById("marque-image");
        const fileInput = document.getElementById("marque-image-input");

        image.addEventListener("click", function() {
            fileInput.click();
        });

        fileInput.addEventListener("change", function() {
            const file = fileInput.files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function() {
                image.setAttribute("src", reader.result);
            });

            reader.readAsDataURL(file);
        });
    </script>
@endsection
