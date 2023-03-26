<x-Layout>
    <div class="cart-main-area pt-100px pb-100px">
        <div class="container">
            <h3 class="cart-page-title">Votre panier</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
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
                                                        src={{$product['image']}} alt="" /></a>
                                            </td>
                                            <td class="product-name"><a href="#">{{$product['title']}} </a></td>
                                            <td class="product-price-cart"><span class="amount">{{$product['price']}} DA</span></td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                                        value="{{$product['amount']}}" />
                                                </div>
                                            </td>
                                            <td class="product-subtotal">{{$product["amount"]*$product['price']}} DA</td>
                                            <td class="product-remove">
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="#"><i class="fa fa-times"></i></a>
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
                                        <a href="#">Retourner a la boutique</a>
                                    </div>
                                    <div class="cart-clear">
                                        <a href="#">Vider le panier</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-lg-4 col-md-12 mt-md-30px">
                            <div class="grand-totall">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gary-cart">Total</h4>
                                </div>
                                <h5>Nombre de produits <span> 6 produits </span></h5>
                                <h4 class="grand-totall-title">Prix Total <span>983000 DA</span></h4>
                                <a href="checkout.html">Envoyer la commande</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-Layout>
