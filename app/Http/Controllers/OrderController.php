<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Method;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order()
    {
        $account = Account::where('username', session('username'))->first();
        $methods = Method::all();
        $this->data['account'] = $account ?? [];
        $this->data['methods'] = $methods ?? [];
        return view('order', $this->data);
    }

    public function postOrder(Request $request){

        $account = Account::where('username',session('username'))->first();
        Order::insert([
            'user_id'=> $account->id,
            'method_id'=> $request->method_id,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $order = Order::orderBy('id','desc')->first();
        foreach (array_keys(session('cart')) as $product_id):
            $quantity = session("cart.$product_id");
            $product = Product::where('id', $product_id)->first();
            $quantity_product = $product->quantity;
            $price = $product->price;

            OrderDetail::insert([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'quantity' => $quantity,
                'price' => $price
            ]);

            Product::find($product->id)->update([
                'quantity' => ($quantity_product - $quantity)
            ]);
        endforeach;
        session()->forget("cart");
        session()->forget("total");
        echo "<script>alert('Bạn đã đặt hàng thành công. Shop sẽ gọi xác nhận cho bạn ạ!'); location='.'</script>";
    }
}
