<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Repositories\Cart\CartRepository;
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

    public function edit($id)
    {
        $cart = $this->repository->find($id);
        $users = User::all();
        $products = Product::all();
        if(empty($cart))
        {
            return redirect()->route('carts.index')->with('message','Cart has ID = '. $id. 'does not exist.');
        }

        return view('admin.carts.edit', compact('cart', 'users', 'products'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|alpha_num',
        ]);

        $data = $request->all();
        $this->repository->edit($data, $id);

        return redirect()->route('carts.index')->with('message', 'Updated success.');
    }

    public function delete($id)
    {
        $cart = $this->repository->find($id);
        if(empty($cart))
        {
            return redirect()->route('carts.index')->with('message', 'Cart has ID = '. $id. 'does not exist.');
        } else {
            $carts = $this->repository->delete($id);
        }

        return redirect()->route('carts.index')
            ->with('carts', $carts)
            ->with('message', 'Deleted success.');
    }
}

