<?php

namespace App\Repositories;

use App\Models\Adms\AttParam;

class AttParamRepository implements AttParamRepositoryInterface
{
    protected $model;

    public function __construct(AttParam $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $param = $this->find($id);
        $param->update($data);
        return $param;
    }

    public function delete($id)
    {
        $param = $this->find($id);
        return $param->delete();
    }
}
