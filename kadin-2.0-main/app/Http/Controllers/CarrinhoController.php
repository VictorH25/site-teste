<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function carrinhoLista()
    {
        $products = \Cart::getContent();
        return view('site.carrinho', compact('products'));
    }

    public function adcionarCarrinho(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);
    }
}
