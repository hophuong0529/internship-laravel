<?php

namespace App\Repositories;

interface RepositoryInterface
{

    public function find($id);

    public function create($data);

    public function show();

    public function edit($id, $data);

    public function delete($id);
}
