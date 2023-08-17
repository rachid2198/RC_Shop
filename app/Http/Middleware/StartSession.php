<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StartSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $cart = session()->get('cart');
        if (!$cart) {
            $cart = [];
            session()->put('cart', []);
        }

        $total = session()->get('total');
        $num_produits = session()->get('num_produits');
        
        if (!$total) {
            $total = 0;
            session()->put('total', 0);
        }
        if (!$num_produits) {
            $num_produits = 0;
            session()->put('num_produits', 0);
        }

        return $next($request);
    }
}