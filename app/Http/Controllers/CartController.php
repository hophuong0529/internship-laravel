<?php

namespace App\Http\Controllers;

use App\Repositories\cart\CartRepository;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $repository;

    public function __construct(CartRepository $repository)
    {
        $this->repository = $repository;
    }

    public function cart($action = null, $id = null, Request $request)
    {
        switch ($action) {
            case 'update':
                foreach (array_keys(session('cart')) as $cartId) {
                    session(["cart.$cartId" => $request->input($cartId)]);
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
    public function index()
    {
        $carts = $this->repository->all();
        return view('admin.carts.index')->with('carts', $carts);
    }
}

