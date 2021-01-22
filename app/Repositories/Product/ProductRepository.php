<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\RepositoryAbstract;
use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ProductRepository implements ProductRepositoryInterface
{

    protected $model;

    public function __construct()
    {
        $this->model = new Product();
    }

    public function all()
    {
        $products = $this->model->all();

        return $products;
    }

    public function create(array $data)
    {
        $product = $this->model->create($data);

        return $product;
    }

    public function edit(array $data, $id)
    {
        $record = $this->find($id);
        $product = $record->update($data);

        return $product;
    }

    public function delete($id)
    {
        $product = $this->model->destroy($id);

        return $product;
    }

    public function find($id)
    {
        $product = $this->model->find($id);

        return $product;
    }
}
