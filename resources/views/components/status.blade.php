@props(['order'])


@if ($order->statut == "En cours de traitement")
    <span class="badge badge-pill badge-primary">{{$order->statut}}</span>
@elseif($order->statut == 'Confirmé')
    <span class="badge badge-pill badge-success">{{$order->statut}}</span>
@else
    <span class="badge badge-pill badge-danger">{{$order->statut}}</span>
@endif
