@extends('components.admin-layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/add-product.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />


    <style>
        .categories-form {
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
            <form class="form-horizontal" method="POST" action="/admin/ajout-produit" enctype="multipart/form-data">
                @csrf
                <div class="card-body" id="product-form">
                    <h4 class="categories-form">Informations du produit</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nom du
                            produit</label>
                        <div class="col-sm-9">
                            <input type="text"
                                class="{{ $errors->has('nom') ? 'form-control is-invalid' : 'form-control' }}"
                                id="fname" placeholder="Nom du produit" name="nom" value="{{old('nom')}}">
                            @error('nom')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="{{ $errors->has('description') ? 'form-control is-invalid' : 'form-control' }}" name="description"
                                placeholder="Ecrivez la description du produit ici........" rows="5">{{old('description')}}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 control-label col-form-label text-right">Catégories</label>
                        <div class="col-md-9">
                            <select class="{{ $errors->has('category_id') ? 'select2 form-control custom-select is-invalid' : 'select2 form-control custom-select' }} " 
                                id="category-select" name="category_id" style="width: 100%; height:36px;">
                                <option value="">-----</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->nom }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 control-label col-form-label text-right">Sous-Catégories</label>
                        <div class="col-md-9">
                            <select class="{{ $errors->has('subcategory_id') ? 'select2 form-control custom-select is-invalid' : 'select2 form-control custom-select' }}"
                                 id="subcategory-select" name="subcategory_id" style="width: 100%; height:36px;" disabled>
                                <option value="">-----</option>
                            </select>
                            @error('subcategory_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-3 control-label col-form-label text-right">Sous sous-catégories</label>
                        <div class="col-md-9">
                            <select class="{{ $errors->has('finalcategory_id') ? 'select2 form-control custom-select is-invalid' : 'select2 form-control custom-select' }}"
                                 id="finalcategory-select" name="finalcategory_id" style="width: 100%; height:36px;" disabled>
                                <option value="">-----</option>
                            </select>
                            @error('finalcategory_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 control-label col-form-label text-right">Marques</label>
                        <div class="col-md-9">
                            <select class="{{ $errors->has('brand_id') ? 'select2 form-control custom-select is-invalid' : 'select2 form-control custom-select' }}" 
                            style="width: 100%; height:36px;" name="brand_id">
                                <option value="">-----</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->nom }}</option>
                                @endforeach
                            </select>
                            @error('brand_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label"
                        >Prix</label>
                        <div class="col-sm-3">
                            <input type="number"
                                class="{{ $errors->has('stock') ? 'form-control is-invalid' : 'form-control' }}"
                                placeholder="5000" name="prix" value="{{old('prix')}}">
                            @error('prix')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Quantité</label>
                        <div class="col-sm-3">
                            <input type="number"
                                class="{{ $errors->has('stock') ? 'form-control is-invalid' : 'form-control' }}"
                                id="fname" placeholder="Quantité" name="stock" value="{{old('stock')}}">
                            @error('stock')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="categories-form">
                        <h4>Fichiers et images</h4>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 text-right control-label col-form-label">Image principale</label>
                        <div class="col-md-9">
                            <input type="file" accept="image/*" class="{{ $errors->has('image_principal') ? 'form-control is-invalid' : 'form-control' }}" 
                            name="image_principal" />
                            @error('image_principal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Images du
                            produit</label>

                        <div class="col-sm-9">
                            <div class="needsclick dropzone" id="document-dropzone">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 text-right control-label col-form-label">Fichier technique</label>
                        <div class="col-md-9">
                            <input type="file" accept=".pdf,.docx" class="{{ $errors->has('fichier_technique') ? 'form-control is-invalid' : 'form-control' }}" 
                            name="fichier_technique" />
                            @error('fichier_technique')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Url Vidéo</label>
                        <div class="col-sm-9">
                            <input type="text"
                                class="{{ $errors->has('url_video') ? 'form-control is-invalid' : 'form-control' }}"
                                id="fname" placeholder="Url de la vidéo du produit" name="url_video" 
                                value="{{old('url_video')}}">
                            @error('url_video')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="categories-form">
                        <h4>Caractéristiques</h4>
                    </div>

                    <div class="form-group row" id="properties-div1">
                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Propriété</label>
                        <div class="col-sm-3">
                            <input type="text" id="property-field" name="property[1]" class="form-control" placeholder="ex: Taille....."
                                >
                        </div>
                        <label for="fname" class="col-sm-1 text-right control-label col-form-label">Valeur</label>
                        <div class="col-sm-3">
                            <input type="text" id="value-field" class="form-control" name="value[1]"
                                placeholder="ex: 24cm x 23cm...." >
                        </div>
                        <div class="col-sm-1 text-center">
                            <button type="button" id="add-property" class="btn btn-primary" onclick="addProperty(1)">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="border-top">
                    <div class="card-body text-center">
                        <button type="submit" class="btn btn-primary">Confirmer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>

    <script>

        $('#category-select').on('change', function() {
            var category_id = $(this).val();
            if (category_id === "") {
                var select = $('#subcategory-select');
                select.empty();
                select.append('<option value="default">-----</option>');
                select.prop('disabled', true)
            } else {
                $.ajax({
                    url: '/get-subcategories/' + category_id,
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        // Handle the response here
                        var select = $('#subcategory-select');
                        select.empty();
                        select.append('<option value="default">-----</option>');
                        for (var i = 0; i < response.length; i++) {
                            console.log(response[i].nom)
                            var options = "<option value='" + response[i].id + "'>" + response[i].nom +
                                "</option>"
                            select.append(options)
                        }
                        select.removeAttr('disabled')
                    },
                    error: function(xhr, status, error) {
                        // Handle errors here
                        console.log('Error woooow: ' + error);
                    }
                });
            }
        })

        $('#subcategory-select').on('change', function() {
            var subcategory_id = $(this).val();
            if (subcategory_id === "") {
                var select = $('#finalcategory-select');
                select.empty();
                select.append('<option value="default">-----</option>');
                select.prop('disabled', true)
            } else {
                $.ajax({
                    url: '/get-finalcategories/' + subcategory_id,
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        // Handle the response here
                        var select = $('#finalcategory-select');
                        select.empty();
                        select.append('<option value="default">-----</option>');
                        for (var i = 0; i < response.length; i++) {
                            console.log(response[i].nom)
                            var options = "<option value='" + response[i].id + "'>" + response[i].nom +
                                "</option>"
                            select.append(options)
                        }
                        select.removeAttr('disabled')
                    },
                    error: function(xhr, status, error) {
                        // Handle errors here
                        console.log('Error woooow: ' + error);
                    }
                });
            }
        })

        function addProperty(level) {
            let clone = $('#properties-div'+level).clone();
            clone.attr('id','properties-div'+(level+1))
            clone.find(':input').val('');
            clone.find(':button').attr('onclick', 'addProperty('+ (level + 1) +')');
            clone.find('#property-field').attr('name', 'property[' + (level + 1) + ']');
            clone.find('#value-field').attr('name', 'value[' + (level + 1) + ']');
            $('#product-form').append(clone);           
            $('#add-property').attr('id','delete-property'+level);
            $('#delete-property'+level).attr('onclick','deleteProperty('+level+')');
            $('#delete-property'+level).html('<i class="fa fa-x"></i>');
        }

        function deleteProperty(level){
            $('#properties-div'+level).remove()
        }

        var uploadedDocumentMap = {}
        Dropzone.options.documentDropzone = {
            url: '{{ route('storeProductImages') }}',
            maxFilesize: 2, // MB
            acceptedFiles:'image/*', 
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function(file, response) {
                $('form').append('<input type="hidden" name="document[]" value="' + response.name +
                    '">')
                uploadedDocumentMap[file.name] = response.name
            },
            removedfile: function(file) {
                file.previewElement.remove()
                var name = ''
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name
                } else {
                    name = uploadedDocumentMap[file.name]
                }
                $('form').find('input[name="document[]"][value="' + name + '"]').remove()
            },
            init: function() {
            }
        }
    </script>
@endsection
