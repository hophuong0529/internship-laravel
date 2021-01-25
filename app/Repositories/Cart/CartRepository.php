<?php

namespace App\Repositories\Cart;

use App\Models\Cart;

class CartRepository implements CartRepositoryInterface
{

    protected $model;

    public function __construct()
    {
        $this->model = new Cart();
    }

    public function all()
    {
        $cart = $this->model->all();

        return $cart;
    }

    public function create(array $data)
    {
        $cart = $this->model->create($data);

        return $cart;
    }

    public function edit(array $data, $id)
    {
        $record = $this->find($id);
        $cart = $record->update($data);

        return $cart;
    }

    public function delete($id)
    {
        $cart = $this->model->destroy($id);

        return $cart;
    }

    public function find($id)
    {
        $cart = $this->model->find($id);

        return $cart;
    }
}
