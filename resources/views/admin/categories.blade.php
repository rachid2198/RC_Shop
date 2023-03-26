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
    Catégories
@endsection

@section('content')
    <div class="buttons">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-Modal">Ajouter une
            catégorie</button>
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
                        @foreach ($categories as $categorie)
                            <tr>
                                <td>{{ $categorie['nom'] }}</td>
                                <td></td>
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
                                                title="Delete">Supprimer</button>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="btn btn-primary btn-sm rounded-0" type="button"
                                                href="/admin/categories/{{$categorie['id']}}">
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

    @foreach ($categories as $category)
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
                            <form class="form-horizontal">
                                <div class="card-body" id="product-form">
                                    <h4 class="card-title">Modifier une catégorie</h4>
                                    
                                    <div class="form-group row mt-5">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">Image</label>
                                        <div class="col-sm-9 image-form">
                                            <img src="{{ asset('images/blank/blank-category.jpg') }}" onclick="clickfileinput({{$category['id']}})" alt="Click to upload"
                                                id="editCategory-image{{$category['id']}}">
                                            <input type="file" id="editCategory-image-input{{$category['id']}}" onchange="changeImage({{$category['id']}})" style="display:none;">
                                        </div>
                                    </div>

                                    <div class="form-group row mt-5">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">Nom</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname"
                                                placeholder="Nom de la catégorie">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-success">Confirmer</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="delete-Modal{{ $category['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Avertissement!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Attention ! Vous êtes sur le point de supprimer définitivement une catégorie. Cette action est
                        irréversible et supprimera toutes les sous catégories associées a cette catégorie. Êtes-vous sûr(e)
                        de vouloir
                        continuer ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-primary">Supprimer</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="modal fade" id="subcategories-modal{{ $category['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Les sous-catégories</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="sidebar-widget-category">
                            <ul>
                                @foreach ($category['subcategories'] as $sub_category)
                                    <li><a href="#" class=""> {{ $sub_category }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    @endforeach

    <div class="modal fade" id="add-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                        <form class="form-horizontal">
                            <div class="card-body" id="product-form">
                                <h4 class="card-title">Ajouter une catégorie</h4>
                                <div class="form-group row mt-5">
                                    <label for="fname"
                                        class="col-sm-3 text-right control-label col-form-label">Image</label>
                                    <div class="col-sm-9 image-form">
                                        <img src="{{ asset('images/blank/blank-category.jpg') }}" alt="Click to upload"
                                            id="category-image">
                                        <input type="file" id="category-image-input" style="display:none;">
                                    </div>
                                </div>
                                <div class="form-group row mt-5">
                                    <label for="fname"
                                        class="col-sm-3 text-right control-label col-form-label">Nom</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname"
                                            placeholder="Nom de la catégorie">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-success">Confirmer</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
    <script src="{{ asset('extra-libs/multicheck/jquery.multicheck.js') }}"></script>
    <script src="{{ asset('extra-libs/DataTables/datatables.min.js') }}"></script>

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

        function clickfileinput(id){
            const fileInput = document.getElementById("editCategory-image-input"+id);
            fileInput.click();
        }

        function changeImage(id){
            const edit_image = document.getElementById("editCategory-image"+id);
            const edit_fileInput = document.getElementById("editCategory-image-input"+id);

            const file = edit_fileInput.files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function() {
                edit_image.setAttribute("src", reader.result);
            });

            reader.readAsDataURL(file);
        }

        const image = document.getElementById("category-image");
        const fileInput = document.getElementById("category-image-input");

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
