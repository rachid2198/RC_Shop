<x-Layout>
    <link rel="stylesheet" href="{{ asset('css/tracking.css') }}" />

    <div class="tracking-form" id="track-form" style="display:block">
        <div class="container">
            <div class="order-tracking">
                <p>Pour suivre vos commandes, veuillez saisir l'identifiant de votre commande et le numéro de télephone que vous avez utiliser,
                    et appuyer sur le bouton "Suivre"
                </p>
                {{-- <p>To track your order please enter your Order ID in the box below and press the "Track" button. This
                    was given to you on your receipt and in the confirmation email you should have received.</p> --}}
                <form action="#">
                    <div class="row mb-n-30px">
                        <div class="col-12 mb-30px">
                            <label for="orderID">Identifiant de la commande</label>
                            <input id="orderID" type="text" placeholder="Identifiant">
                        </div>
                        <div class="col-12 mb-30px">
                            <label for="billingEmail">Numéro de télephone</label>
                            <input id="billingEmail" type="text" placeholder="Le numéro que vous avez utiliser dans la commande">
                        </div>
                        <div class="col-12 text-center mb-30px">
                            <button class="btn btn-dark btn-outline-hover-dark" onclick="track('suivre')">Suivre</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="order-container" id="track-order" style="display:none">
        <article class="card">
            <header class="card-header"> Votre commande </header>
            <div class="card-body">
                <h6>Identifiant de la commande: OD45345345435</h6>
                <article class="card">
                    <div class="card-body row">
                        <div class="col"> <strong>Temps estimé de la livraison:</strong> <br>29 nov 2019 </div>
                        <div class="col"> <strong>Livraison par:</strong> <br> Société, | <i class="fa fa-phone"></i>
                            +1598675986 </div>
                        <div class="col"> <strong>Status:</strong> <br> Ramassé par le livreur </div>
                        <div class="col"> <strong>Tracking #:</strong> <br> OD45345345435 </div>
                    </div>
                </article>
                <div class="track">
                    <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span
                            class="text">Commande confirmé </span> </div>
                    <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span
                            class="text"> Ramassé par le livreur </span> </div>
                    <div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text">
                            En cours de livraison </span> </div>
                    <div class="step"> <span class="icon"> <i class="fa fa-dropbox"></i></span> <span
                            class="text">prêt pour le ramassage</span> </div>
                </div>
                <hr>
                <ul class="row">
                    @foreach ($cart as $product)
                        <li class="col-md-4">
                            <figure class="itemside mb-3">
                                <div class="aside"><img src={{$product['image']}} class="img-sm border">
                                </div>
                                <figcaption class="info align-self-center">
                                    <p class="title">{{$product['title']}} <br> Quantité: {{$product['amount']}}</p> <span
                                        class="text-muted">{{$product['price']}} DA</span>
                                </figcaption>
                            </figure>
                        </li>
                    @endforeach
                </ul>
                <hr>
                <a class="btn btn-warning" data-abc="true" onclick="track('done')"> Chercher une autre commande</a>
            </div>
        </article>
    </div>


    <script>
        function track(action){
            if(action=="suivre"){
                document.getElementById("track-order").style.display="block";
                document.getElementById("track-form").style.display="none";
            }else{
                document.getElementById("track-order").style.display="none";
                document.getElementById("track-form").style.display="block";
            }
        }
    </script>

</x-Layout>
