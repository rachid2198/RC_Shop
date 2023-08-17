<x-Layout>
    <x-slot name="css">
        <style>
            .tracking-title {
                color: #355669;
                margin-bottom: 2rem;
            }

            .tracking-form .col {
                margin-right: 3rem;
            }

            .tracking-form,
            .tracking-table {
                margin-bottom: 4rem;
            }

            .btn {
                border-radius: 0px;
                font-size: 1rem;
            }
        </style>
    </x-slot>

    <div class="container pt-5">
        <h3 class="tracking-title">Suivi de ma commande</h3>

        <form method="POST" action="{{ route('order-list') }}">
            @csrf
            <div class="row align-items-center tracking-form">
                <div class="col col-3">
                    <label for="num_commande">Entrer le numéro de télephone</label>
                    <input type="text" class="form-control" id="num_commande" name="num_tel" required>
                    @if ($message != null)
                        <div class="invalid-feedback" style="display: block">
                            {{ $message }}
                        </div>
                    @endif
                </div>
                <div class="col col-3 align-self-center">
                    <button type="submit" class="btn btn-primary btn-custom">Suivre ma commande</button>
                </div>
            </div>
        </form>



        @if ($orders != null)
            <div class="row tracking-table">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0">Vos commandes</h5>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">date de la commande</th>
                                    <th scope="col">statut actuel</th>
                                    <th scope="col">Total de la commande</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->created_at }}</td>
                                        <td>{{ $order->statut }}</td>
                                        <td>{{ $order->total }} DA</td>
                                        <td><button type="button" class="btn-link text-primary" data-bs-toggle="modal"
                                                data-bs-target="#view-Modal{{$order->id}}"> voir les details </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif
    </div>

    @if ($orders != null)
        @foreach ($orders as $order)
            <div class="modal fade" id="view-Modal{{$order->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Détails de la commande</h5>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                        </div>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Article</th>
                                                    <th scope="col">Quantité</th>
                                                    <th scope="col">Prix unitaire</th>
                                                    <th scope="col">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($order->articles as $item)
                                                    <tr>
                                                        <td>{{ $item->product->nom }} </td>
                                                        <td>{{ $item->quantity }}</td>
                                                        <td>{{ $item->product->prix }} DA</td>
                                                        <td> {{ $item->product->prix * $item->quantity }} DA</td>
                                                    </tr>
                                                @endforeach

                                                {{-- last column --}}
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Prix livraison: {{ $order->prix_livraison }} DA</td>
                                                    <td>Total: {{ $order->total }} DA</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif


    <x-slot name="js">
    </x-slot>
</x-Layout>
