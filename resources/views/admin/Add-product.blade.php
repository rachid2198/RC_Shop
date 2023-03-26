@extends('components.admin-layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/add-product.css') }}">

    <style>
        .categories-form{
            margin-top: 3rem;
            margin-bottom: 3rem;
        }
    </style>
@endsection

@section('title')
    Ajouter un produit
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card">
            <form class="form-horizontal">
                <div class="card-body" id="product-form">
                    <h4 class="categories-form">Informations du produit</h4>
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
@endsection

@section('js')
    <script>
        
    </script>
@endsection
