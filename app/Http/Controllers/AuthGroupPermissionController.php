<?php

namespace App\Http\Controllers;

use App\Repositories\AuthGroupPermissionRepositoryInterface;
use Illuminate\Http\Request;

class AuthGroupPermissionController extends Controller
{
    protected $repository;

    public function __construct(AuthGroupPermissionRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return response()->json($this->repository->all());
    }

    public function show($id)
    {
        return response()->json($this->repository->find($id));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'group_id' => 'required|integer',
            'permission_id' => 'required|integer',
        ]);
        return response()->json($this->repository->create($data), 201);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'group_id' => 'sometimes|integer',
            'permission_id' => 'sometimes|integer',
        ]);
        return response()->json($this->repository->update($id, $data));
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return response()->json(null, 204);
    }
}
