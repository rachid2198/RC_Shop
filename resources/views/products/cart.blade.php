<x-Layout>

    <x-slot name="css">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <style>
            .btn {
                padding: 1rem;
            }

            .modal-dialog {
                width: auto;
                max-width: 800px;
            }

            .modal-title {
                font-size: 1.3rem;
            }

            .modal-title,
            .form-label {
                color: #355669
            }

            .modal-body {
                padding-left: 2rem;
                padding-right: 20%;
            }

            .modal-footer .btn {
                font-size: 15px;
                border-radius: 0%;
                padding: 0px;
            }

            @media only screen and (max-width: 575px) {
                .btn-secondary {
                    width: 180px;
                    height: 50px;
                    font-size: 16px;
                }
            }
        </style>
    </x-slot>

    <div class="cart-main-area pt-100px pb-100px">
        <div class="container">
            <h3 class="cart-page-title">Votre panier</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Nom du produit</th>
                                    <th>Prix</th>
                                    <th>Quantité</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $product)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#"><img class="img-responsive ml-15px"
                                                    src={{ $product['image'] ? asset('storage/' . $product['image']) : asset('images/blank/blank-category.jpg') }}
                                                    alt="{{ $product['nom'] }}" /></a>
                                        </td>
                                        <td class="product-name"><a href="#">{{ $product['nom'] }} </a></td>
                                        <td class="product-price-cart"><span class="amount">{{ $product['prix'] }}
                                                DA</span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                                    value="{{ $product['quantité'] }}" id="{{ $product['id'] }}" />
                                            </div>
                                        </td>
                                        <td class="product-subtotal" id="subtotal{{ $product['id'] }}">
                                            {{ $product['quantité'] * $product['prix'] }}
                                            DA
                                        </td>
                                        <td class="product-remove">
                                            <form method="POST"
                                                action="{{ route('removeFromCart', ['product_id' => $product['id']]) }}">
                                                @csrf
                                                <button type="submit"><i class="fa fa-times"></i></a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update">
                                    <a href="{{ route('products-display') }}">Retourner a la boutique</a>
                                </div>
                                <form method="POST" action="{{ route('emptyCart') }}">
                                    <div class="cart-clear">
                                        @csrf
                                        <button type="submit" @if (count($cart) == 0) disabled @endif
                                            onclick="this.closest('form').submit();">Vider le
                                            panier</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('send_order') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-8 col-md-12 mt-md-30px">
                                <div class="grand-totall">
                                    <div class="title-wrap mb-3">
                                        <h4 class="cart-bottom-title section-bg-gary-cart">Vos Informations</h4>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nom_commande" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="nom_commande" placeholder="Nom"
                                            name="nom" required>
                                        @error('nom')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="prenom_commande" class="form-label">Prénom</label>
                                        <input type="text" class="form-control" id="prenom_commande"
                                            placeholder="Prénom" name="prenom" required>
                                        @error('prenom')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="adresse_commande" class="form-label">Adresse</label>
                                        <input type="text" class="form-control" id="adresse_commande"
                                            placeholder="adresse" name="adresse" required>
                                        @error('adresse')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="num_tel" class="form-label">Numero de télephone</label>
                                        <input type="text" class="form-control" id="num_tel" name="num_tel"
                                            placeholder="numéro de télephone" required>
                                        @error('num_tel')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 mt-md-30px">
                                <div class="grand-totall">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gary-cart">Total</h4>
                                    </div>
                                    <h5>Nombre de produits <span id="num_produits"> {{ $num_produits }} </span></h5>
                                    <div class="mb-3">
                                        <label for="nom_commande" class="form-label">Livraison</label>
                                        <select class="form-select" aria-label="Default select example" name="wilaya_id"
                                            id="wilaya">
                                            <option value="" selected>-------</option>
                                            @foreach ($wilayas as $wilaya)
                                                <option value="{{ $wilaya->id }}">{{ $wilaya->nom }}</option>
                                            @endforeach
                                        </select>
                                        @error('wilaya_id')
                                            <div class="invalid-feedback" style="display: block"> 
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-5">
                                        <label for="nom_commande" class="form-label">Type</label>
                                        <select class="form-select" aria-label="Default select example"
                                            id="type_livraison" name="type_livraison">
                                            <option value="" selected>-------</option>
                                            <option value="stop_desk">Stop desk</option>
                                            <option value="domicile">A domicile</option>
                                        </select>
                                        @error('type_livraison')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <input type="hidden" id="prix_livraison_input" name="prix_livraison"
                                        value="0">
                                    <input type="hidden" id="total_input" name="total"
                                        value="{{ $total }}">

                                    <h4 class="grand-totall-title">Prix Livraison <span id="prix_livraison">0
                                            DA</span>
                                    </h4>
                                    
                                    <h4 class="grand-totall-title">Total produits <span id="total_produits">{{$total}}
                                            DA</span>
                                    </h4>

                                    <h3 class="grand-totall-title">Prix Total <span
                                            id="total">{{ $total }}
                                            DA</span></h3>
                                    <button class="btn btn-primary" type="submit"
                                        @if (count($cart) == 0) disabled @endif>
                                        Envoyer la commande</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <x-slot name="js">
        <script>
            $('#wilaya, #type_livraison').change(function() {
                var state = $('#wilaya').val();
                var deliveryType = $('#type_livraison').val();

                if (state && deliveryType) {
                    getPrice(state, deliveryType);
                } else {
                    prix_livraison = $('#prix_livraison_input').val();
                    total = $('#total_input').val()
                    $('#total').text(total - prix_livraison + " DA");
                    $('#prix_livraison_input').val(0);
                    $('#total_input').val(total - prix_livraison);
                    $('#prix_livraison').text("0 DA");
                }
            });

            function getPrice(state, type) {
                var delivery_price;
                $.ajax({
                    url: "/getDeliveryPrice",
                    method: 'POST',
                    data: {
                        "wilaya": state,
                        "type": type
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: 'json',
                    success: function(response) {
                        current_total = Number($('#total_input').val());
                        current_price = Number($('#prix_livraison_input').val());
                        prix_total = current_total + Number(response['delivery_price']) - current_price;
                        $('#prix_livraison').text(Number(response['delivery_price']) + ' DA');
                        $('#total').text(prix_total + " DA");
                        $('#prix_livraison_input').val(response['delivery_price']);
                        $('#total_input').val(prix_total);
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                })
            }


        </script>
    </x-slot>
</x-Layout>
