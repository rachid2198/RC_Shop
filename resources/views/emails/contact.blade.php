

@component('mail::message')

# Commande #{{$order->id}}

Voici les détails de la nouvelle commande effectuée :

## Informations du Client
- Nom: {{ $order->nom }}
- Prénom: {{ $order->prenom }}
- Téléphone: {{ $order->num_tel }}
- Adresse: {{ $order->adresse }}
- Wilaya: {{$wilaya}}
- Type de livraison :{{$order->type_livraison}}
- Date de la commande: {{$order->created_at->date()}}

## Produits commandés

| Nom | Quantité | Prix |
|--------------|----------|-------|
@foreach ($order->articles as $item)
| {{ $item->product->nom }} | {{ $item->quantity}} | {{ $item->product->prix }} DA |
@endforeach

<br>

## Total:
- Prix livraison: {{ $order->prix_livraison }} DA
- Total Produits: {{ $order->total - $order->prix_livraison }} DA
- Total Final: {{ $order->total }} DA

@endcomponent

<style>
    table {
        border-collapse: collapse;
    }
    td, th {
        border: 1px solid #ddd;
        padding: 8px;
    }
</style>