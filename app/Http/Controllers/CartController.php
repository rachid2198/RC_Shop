<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wilaya;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function cart()
    {
        return view('products.cart', [
            'cart'=>session()->get('cart'),
            'total'=>session()->get('total'),
            'num_produits'=>session()->get('num_produits'),
            'wilayas'=>Wilaya::all(),
        ]);
    }

    public function addItem(Request $request)
    {
        $product = Product::find($request->input('product_id'));
        $quantity=$request['quantité'];
        $cart = session()->get('cart');
        if (!$cart) {
            $cart = [];
        }
        $cart[$product->id] = [
            'id' => $product->id,
            'nom' => $product->nom,
            'prix' => $product->offer? $product->prix_vente:$product->prix,
            'image'=> $product->image_principal,
            'quantité' => $quantity,
        ];
        session()->put('cart', $cart);
        $total=session()->get('total');
        $num_produits=session()->get('num_produits');
        if (!$total) {
            $total = 0;
        }
        if (!$num_produits) {
            $num_produits = 0;
        }
        session()->put('total', $total+ $cart[$product->id]['prix'] * $cart[$product->id]['quantité']);
        session()->put('num_produits', $num_produits+$cart[$product->id]['quantité']);
        return redirect()->back();
    }

    public function removeItem(Request $request) {
        $id=$request->input('product_id');
        $cart = session()->get('cart');
        $total=session()->get('total');
        $num_produits=session()->get('num_produits');
        session()->put('total', $total- $cart[$id]['prix'] * $cart[$id]['quantité']);
        session()->put('num_produits', $num_produits-$cart[$id]['quantité']);
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect()->back();
    }

    public function changeQuantity(Request $request){
        $quantity=$request['quantity'];
        $id=$request['id'];
        

        $cart=session()->get('cart');
        $diff=$quantity-$cart[$id]['quantité'];
        session()->put('total',session()->get('total')+ $diff*$cart[$id]['prix']);
        session()->put('num_produits',session()->get('num_produits')+ $diff);

        $cart[$id]['quantité']=$quantity;
        session()->put('cart',$cart);

        $total_prix=$cart[$id]['quantité']*$cart[$id]['prix'];
        
        return response()->json([
            'total_prix'=>$total_prix,
            'total'=>session()->get('total'),
            'num_produits'=>session()->get('num_produits'),
        ]);
    }

    public function emptyCart(Request $request){
        session()->put('cart',[]);
        session()->put('total',0);
        session()->put('num_produits',0); 
        return redirect()->back();
    }

    public function deliveryPrice(Request $request){
        $prix=0;
        $wilaya=$request['wilaya'];
        $type=$request['type'];
        $tarif=Wilaya::where(['id'=>$wilaya])->first();
        if($type=="stop_desk"){
            $prix= $tarif->stop_desk;
        }else{
            $prix=$tarif->domicile;
        }

        //session()->put('total', session()->get('total'));
        return response()->json([
            "delivery_price"=> $prix
        ]);
    }

    public function removeDeliveryPrice(Request $request){
        session()->put('total', session()->get('total'));
        return response()->json([
            "new_total"=> session()->get('total'),
        ]);
    }
}