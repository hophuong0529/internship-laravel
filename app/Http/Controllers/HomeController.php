<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index() 
    {   
        $products = Product::with('images')->orderBy('created_at', 'desc')->paginate(3);   
        $this->data['products'] = $products ?? [];

        return view('index', $this->data);   
    }
}
