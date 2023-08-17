<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Article;
use App\Models\Product;
use App\Mail\ContactForm;
use App\Models\Wilaya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{

    public function Orders(Request $request)
    {
        $status = $request->input("status");

        if ($status) {
            $orders = Order::where(['statut' => $status])->get();
        } else {
            $orders = Order::all();
        }

        return view('admin.Orders', [
            'orders' => $orders,
            'status' => $status
        ]);
    }

    public function Tracking()
    {
        return view('client.Order-tracking', [
            'orders' => null,
            'message' => null
        ]);
    }

    public function Add_order(Request $request)
    {
        $rules = [
            'nom' => ['required'],
            'prenom' => ['required'],
            'adresse' => ['required'],
            'num_tel' => ['required', 'numeric'],
            'wilaya_id' => ['required'],
            'type_livraison' => ['required'],
            'prix_livraison' => ['required'],
            'total' => ['required'],
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        } else {
            $formFields = $request->validate($rules);
            $formFields['statut'] = "En cours de traitement";
            $order = Order::create($formFields);

            $cart = session()->get('cart');

            foreach ($cart as $item) {
                Article::create(['order_id' => $order->id, 'product_id' => $item['id'], 'quantity' => $item['quantité']]);
                $product = Product::where('id', $item['id'])->first();
            }

            session()->put('cart', []);
            session()->put('total', 0);
            session()->put('num_produits', 0);

            $wilaya=Wilaya::where('id',$formFields['wilaya_id'])->first()->nom;

            try {
                Mail::to('rachid9821@gmail.com')->send(new ContactForm($order,$wilaya));
                return redirect(route('order-tracking'));
            } catch (\Exception $e) {
                dd($e);
                return redirect()->back();
            }
 
        }
    }

    public function Track_orders(Request $request)
    {
        $num_tel = $request['num_tel'];
        $orders = Order::where(['num_tel' => $num_tel])->get();
        if ($orders->isEmpty()) {
            return view('client.Order-tracking', [
                'orders' => null,
                'message' => "Ce numéro n'est pas associé a aucune commande"
            ]);
        }

        return view('client.Order-tracking', [
            'orders' => $orders,
            'message' => null
        ]);
    }

    public function Edit_order(Request $request, Order $order)
    {
        $rules = [
            'nom' => ['required'],
            'prenom' => ['required'],
            'num_tel' => ['required'],
            'adresse' => ['required'],
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with(['edit_modal' => true, 'id' => $order->id]);

        } else {
            $formFields = $request->validate($rules);

            $order->update($formFields);

            return redirect()->back()->with('message', 'Commande modifié avec succéss');
        }
    }

    public function delete_order(Order $order)
    {
        $order->delete();
        return back()->with('message', 'Commande supprimé avec succés');
    }

    public function change_status(Request $request, Order $order)
    {
        $order->update(['statut' => $request['statut']]);
        return back()->with('message', 'Commande modifié avec succés');
    }
}