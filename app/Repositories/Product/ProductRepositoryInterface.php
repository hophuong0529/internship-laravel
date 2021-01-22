<?php

namespace App\Repositories\Product;

use App\Repositories\RepositoryInterface;

interface ProductRepositoryInterface
{
    public function find($id);

    public function create(array $data);

    public function all();

    public function edit(array $data, $id);

    public function delete($id);
}
