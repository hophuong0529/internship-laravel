<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterface;
use Illuminate\Support\Carbon;
use App\Models\Post;

abstract class RepositoryAbstract implements RepositoryInterface
{
    protected $model, $table;

    public function __construct()
    {
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function find($id)
    {
        $result = $this->model->find($id);
        if(!$result)
        {
            return [];
        }

        return $result;
    }

    public function show()
    {
        return $this->model->all();
    }

    public function edit($id, $data)
    {
        $result = $this->model->find($id);
        $result->update($data);

        return $result;
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}
