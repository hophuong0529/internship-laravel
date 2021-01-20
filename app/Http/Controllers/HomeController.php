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

    public function details($id)
    {
        $product_images = Product::find($id)->images;
        $product = Product::find($id);
        $related_products = Product::where('category_id', $product->category_id)->limit(3)->get();
        $this->data['product_images'] =  $product_images ?? [];
        $this->data['product'] =  $product ?? [];
        $this->data['related_products'] =  $related_products ?? [];

        return view('details', $this->data);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $products = Product::where('name','like','%'.$keyword.'%')->get();
        $this->data['products'] =  $products ?? [];
        $this->data['keyword'] =  $keyword ?? [];
        return view('search', $this->data);
    }

}
