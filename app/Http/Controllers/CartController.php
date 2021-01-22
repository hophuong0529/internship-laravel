<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart($action = null, $id = null, Request $request)
    {
        switch ($action) {
            case 'update':
                foreach (array_keys(session('cart')) as $productId) {
                    session(["cart.$productId" => $request->input($productId)]);
                }
                return redirect("cart");

            case 'add':
                if (session("cart.$id")) {
                    session(["cart.$id" => session("cart.$id") + 1]);
                } else {
                    session(["cart.$id" => 1]);
                }
                return redirect('cart');

            case 'delete':
                session()->forget("cart.$id");
                return redirect('cart');

            case 'delete-all':
                session()->forget('cart');
                return redirect('cart');

            default:
                return view('cart', $this->data);
        }
    }
}
