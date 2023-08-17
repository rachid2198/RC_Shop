<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\data\products;
use App\Models\Product;
use App\Models\Category;
use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class MainController extends Controller
{

    public function HomePage()
    {

        $featured_products = Product::limit(10)->where('featured', true)->latest('updated_at')->get();

        $offered_products = Product::limit(10)->where('offer', true)->latest('updated_at')->get();

        return view('Acceuil', [
            'new' => Product::limit(8)->latest('created_at')->get(),
            'featured' => $featured_products,
            'offered' => $offered_products,
            'categories' => Category::all()
        ]);
    }

    public function About()
    {
        return view('About');
    }

    public function Contact()
    {
        return view('Contact');
    }

    public function sendContactMail(Request $request)
    {
        $rules = [
            'nom' => 'required',
            'email' => 'required|email',
            'sujet' => 'required',
            'message' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $formFields = $request->validate($rules);

        // Send the email
        Mail::to('rachid9821@gmail.com')->send(new ContactForm($formFields));

        // Redirect back to the contact form with a success message
        return redirect()->back()->with('success', 'Votre message a été bien envoyé, nous répondrons à votre message le plus rapidement possible!');
    }

    public function Marques()
    {
        return view('client.Brands', [
            "brands" => Brand::all()
        ]);
    }

    public function Warranty()
    {
        return view('client.Warranty');
    }
}