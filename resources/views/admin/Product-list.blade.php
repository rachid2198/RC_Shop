@extends('components.admin-layout')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('extra-libs/multicheck/multicheck.css') }}">
    <link href="{{ asset('libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/add-product.css') }}">
    <style>
        .image-produit {
            max-width: 6vw;
            max-height: 6vh;
            height: auto;
        }

        .modal-dialog {
            width: 60vw;
        }

        .buttons{
            text-align: right
        }

        .buttons button{
            margin-right: 1rem;
            margin-bottom: 1rem
        }

        .categories-form{
            margin-top: 3rem;
            margin-bottom: 3rem;
        }
        
        .categories-form-first{
            margin-bottom: 3rem;
        }
    </style>
@endsection

@section('title')
    Produits
@endsection

@section('content')
    <div class="buttons">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteAll-Modal">Supprimer les éléments sélectionnés</button>
    </div>
    <div class="card">
        <div class="card-body">
            {{-- <h5 class="card-title">Basic Datatable</h5> --}} 
            <div class="table-responsive">
                <table id="zero_config" class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>
                                <label class="customcheckbox m-b-20">
                                    <input type="checkbox" id="mainCheckbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </th>
                            <th scope="col">image</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Catégorie</th>
                            <th scope="col">Marque</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Quantité</th>
                            <th scope="col">Publié en</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="customtable">
                        @foreach ($products as $product)
                            <tr>
                                <th>
                                    <label class="customcheckbox">
                                        <input type="checkbox" class="listCheckbox" />
                                        <span class="checkmark"></span>
                                    </label>
                                </th>
                                <td><img class="image-produit" src="{{ $product['image'] }}" alt="image produit" /></td>
                                <td>{{ $product['title'] }}</td>
                                <td>{{ $product['category'] }}</td>
                                <td>{{ $product['brand'] }}</td>
                                <td>{{ $product['price'] }}</td>
                                <td>{{ $product['quantity'] }}</td>
                                <td class="date"></td>
                                <td>
                                    <ul class="list-inline m-0">
                                        <li class="list-inline-item">
                                            <button class="btn btn-success btn-sm rounded-0" type="button"
                                                data-toggle="modal" data-target="#Modal{{ $product['id'] }}"><i
                                                    class="fa fa-edit"></i></button>
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

    <!-- Modal -->
    @foreach ($products as $product)
        <div class="modal fade" id="Modal{{ $product['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true ">
            <div class="modal-dialog modal-lg" role="document ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modifier un produit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true ">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <form class="form-horizontal">
                                <div class="card-body" id="product-form">
                                    <h4 class="categories-form-first">Informations du produit</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nom du produit</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="Nom du produit">
                                        </div>
                                    </div>
                
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" placeholder="Ecrivez la description du produit ici........" rows="5"></textarea>
                                        </div>
                                    </div>
                
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Détails</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" placeholder="Ecrivez la liste des spécifications ici........" rows="5"></textarea>
                                        </div>
                                    </div>
                
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label col-form-label text-right">Marques</label>
                                        <div class="col-md-9">
                                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                @foreach ($brands as $brand)
                                                    <option value="">{{$brand['nom']}}</option>                                
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Prix</label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" placeholder="5000">
                                        </div>
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Quantité</label>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" id="fname" placeholder="Quantité">
                                        </div>
                                    </div>
                
                                    <div class="categories-form">
                                        <h4>Catégories et sous-catégories</h4>
                                    </div>
                
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label col-form-label text-right">Catégories</label>
                                        <div class="col-md-9">
                                            <select class="select2 form-control custom-select" id="cat"
                                                style="width: 100%; height:36px;">
                                                <option value="default">-----</option>
                                                @foreach ($categories as $categorie)
                                                    <option value="{{ $categorie['nom'] }}">{{ $categorie['nom'] }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label col-form-label text-right">Sous-Catégories</label>
                                        <div class="col-md-9">
                                            <select class="select2 form-control custom-select" id="cat"
                                                style="width: 100%; height:36px;">
                                                <option value="default">-----</option>
                                            </select>
                                        </div>
                                    </div>
                
                                    <div class="categories-form">
                                        <h4>Fichiers et images</h4>
                                    </div>
                
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Url Vidéo</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname"
                                                placeholder="Url de la vidéo du produit">
                                        </div>
                                    </div>
                
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Images du
                                            produit</label>
                                        <fieldset class="upload_dropZone text-center mb-3 p-4 col-sm-9">
                
                                            <legend class="visually-hidden">Image uploader</legend>
                
                                            <svg class="upload_svg" width="60" height="60" aria-hidden="true">
                                                <use href="#icon-imageUpload"></use>
                                            </svg>
                
                                            <p class="small my-2">Déposer vos images ici<br><i>ou</i></p>
                
                                            <input id="upload_image_background" data-post-name="image_background"
                                                data-post-url="https://someplace.com/image/uploads/backgrounds/"
                                                class="position-absolute invisible" type="file" multiple
                                                accept="image/jpeg, image/png, image/svg+xml" />
                
                                            <label class="btn btn-upload mb-3" for="upload_image_background">Choose file(s)</label>
                
                                            <div class="upload_gallery d-flex flex-wrap justify-content-center gap-3 mb-0"></div>
                
                                        </fieldset>
                                    </div>
                
                                    <div class="form-group row">
                                        <label class="col-md-3 text-right control-label col-form-label">Fichier technique</label>
                                        <div class="col-md-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                            </div>
                                        </div>
                                    </div>
                
                
                                </div>
                                <div class="border-top">
                                    <div class="card-body text-center">
                                        <button type="button" class="btn btn-primary">Confirmer</button>
                                    </div>
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
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Avertissement!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Attention ! Vous êtes sur le point de supprimer définitivement un produit. Cette action est
                        irréversible et supprimera toutes les données associées à ce produit. Êtes-vous sûr(e) de vouloir
                        continuer ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-primary">Supprimer</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="deleteAll-Modal" tabindex="-1" role="dialog"
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
                        Attention ! Vous êtes sur le point de supprimer plusieurs produits définitivement. Cette action est
                        irréversible et supprimera toutes les données associées à ces produit. Êtes-vous sûr(e) de vouloir
                        continuer ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-primary">Supprimer</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- Modal -->
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

    <script>
        /* temporary code --------------- */
        var today = new Date();
        var date = today.getDate() + '/' + (today.getMonth() + 1) + '/' + today.getFullYear();
        var dates = document.getElementsByClassName('date');

        [].slice.call(dates).forEach(function(item) {
            item.innerHTML = date;
        });
    </script>
@endsection
