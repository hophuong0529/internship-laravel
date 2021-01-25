<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Repositories\Product\ProductRepository;
use App\Models\Category;
use Carbon\Carbon;


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
        $categories = Category::all();
        return view('admin.products.create')->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'category_id' => 'required|alpha_num',
            'price' => 'required|alpha_num',
            'quantity' => 'required|alpha_num',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        $data = $request->all();

        if (!array_key_exists('is_top', $data)) {
            $data['is_top'] = 0;
        }
        if (!array_key_exists('on_sale', $data)) {
            $data['on_sale'] = 0;
        }
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();

        $product = $this->repository->create($data);

        foreach ($data['image'] as $image) {
            $path = 'images/' . time() . '-' . $image->getClientOriginalName();
            Image::insert([
                'path' => $path,
                'product_id' => $product->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $image->move('public/images/', $path);
        }
        return redirect(route('products.index'))->with('message', 'Created success.');
    }

    public function edit($id)
    {
        $product = $this->repository->find($id);
        $categories = Category::all();
        if(empty($product))
        {
            return redirect()->route('products.index')->with('message','Product has ID = '. $id. 'does not exist.');
        }

        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'category_id' => 'required|alpha_num',
            'price' => 'required|alpha_num',
            'quantity' => 'required|alpha_num',
            'description' => 'required',
        ]);

        $data = $request->all();

        if (!array_key_exists('is_top', $data)) {
            $data['is_top'] = 0;
        }
        if (!array_key_exists('on_sale', $data)) {
            $data['on_sale'] = 0;
        }

        $data['updated_at'] = Carbon::now();
        $this->repository->edit($data, $id);

        if(array_key_exists('image', $data)) {
            Image::where('product_id', $id)->delete();
            foreach ($data['image'] as $image) {
                $path = 'images/' . time() . '-' . $image->getClientOriginalName();
                Image::insert([
                    'path' => $path,
                    'product_id' => $id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
                $image->move('public/images/', $path);
            }
        }
        return redirect()->route('products.index')->with('message', 'Updated success.');
    }

    public function delete($id)
    {
        $product = $this->repository->find($id);
        if(empty($product))
        {
            return redirect()->route('products.index')->with('message', 'Product has ID = '. $id. 'does not exist.');
        } else {
            $products = $this->repository->delete($id);
            Image::where('product_id', $product->id)->delete();
        }

        return redirect()->route('products.index')
            ->with('products', $products)
            ->with('message', 'Deleted success.');
    }
}

