<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function home()
    {
        $latest_products = Product::orderBy('created_at', 'desc')->limit(3)->get();
        $top_products = Product::where('is_top', 1)->limit(3)->get();
        $this->data['latest_products'] =  $latest_products ?? [];
        $this->data['top_products'] =  $top_products ?? [];

        return view('home', $this->data);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $products = Product::where('name','like','%'.$keyword.'%')->get();
        $this->data['products'] =  $products ?? [];
        $this->data['keyword'] =  $keyword ?? [];
        return view('search', $this->data);
    }

    public function productTop(Request $request)
    {
        $products = Product::where('is_top', 1)->get();
        $this->data['products'] =  $products ?? [];
        return view('top-product', $this->data);
    }

    public function productSale(Request $request)
    {
        $products = Product::where('on_sale', 1)->get();
        $this->data['products'] =  $products ?? [];
        return view('sale-product', $this->data);
    }
}
