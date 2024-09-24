<?php

namespace App\Repositories;

use App\Models\Adms\AuthGroup;

class AuthGroupRepository implements AuthGroupRepositoryInterface
{
    public function all()
    {
        return AuthGroup::all();
    }

    public function find($id)
    {
        return AuthGroup::findOrFail($id);
    }

    public function create(array $data)
    {
        return AuthGroup::create($data);
    }

    public function update($id, array $data)
    {
        $authGroup = $this->find($id);
        $authGroup->update($data);
        return $authGroup;
    }

    public function delete($id)
    {
        $authGroup = $this->find($id);
        return $authGroup->delete();
    }
}
