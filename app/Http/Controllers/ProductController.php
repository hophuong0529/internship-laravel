<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Product\ProductRepository;

class ProductController extends Controller
{
    protected $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $products = $this->repository->all();

        return view('admin.products.index')->with('products', $products);
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products',
        ]);

        $data = $request->all();
        $products = $this->repository->create($data);

        return redirect()->route('products.index')->with('message', 'Created success.');
    }

    public function edit($id)
    {
        $product = $this->repository->find($id);
        if(empty($product))
        {
            return redirect()->route('products.index')->with('message','Product has ID = '. $id. 'does not exist');
        }

        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|unique:products',
        ]);

        $data = $request->all();
        $products = $this->repository->edit($data, $id);

        return redirect()->route('products.index')->with('message', 'Updated success.');
    }

    public function delete($id)
    {
        $Product = $this->repository->find($id);
        if(empty($Product))
        {
            return redirect()->route('products.index')->with('message', 'Product has ID = '. $id. 'does not exist');
        } else {
            $products = $this->repository->delete($id);
        }

        return redirect()->route('products.index')
            ->with('products', $products)
            ->with('message', 'Deleted success');
    }
}

