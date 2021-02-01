<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Order;

class UserController extends Controller
{
    public function purchase()
    {
        $account = Account::where('username',session('username'))->first();
        $orders = Order::where('user_id', $account->id)->get();
        $this->data['orders'] = $orders ?? [];
        return view('purchase-history', $this->data);
    }
}
