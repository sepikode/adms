<?php

namespace App\Repositories;

use App\Models\Adms\AuthGroupPermission;

class AuthGroupPermissionRepository implements AuthGroupPermissionRepositoryInterface
{
    public function all()
    {
        return AuthGroupPermission::all();
    }

    public function find($id)
    {
        return AuthGroupPermission::findOrFail($id);
    }

    public function create(array $data)
    {
        return AuthGroupPermission::create($data);
    }

    public function update($id, array $data)
    {
        $authGroupPermission = $this->find($id);
        $authGroupPermission->update($data);
        return $authGroupPermission;
    }

    public function delete($id)
    {
        $authGroupPermission = $this->find($id);
        return $authGroupPermission->delete();
    }
}
