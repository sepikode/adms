<?php

namespace App\Http\Controllers;

use App\Repositories\AuthGroupRepositoryInterface;
use Illuminate\Http\Request;

class AuthGroupController extends Controller
{
    protected $authGroupRepo;

    public function __construct(AuthGroupRepositoryInterface $authGroupRepo)
    {
        $this->authGroupRepo = $authGroupRepo;
    }

    public function index()
    {
        $authGroups = $this->authGroupRepo->all();
        return view('auth_groups.index', compact('authGroups'));
    }

    public function create()
    {
        return view('auth_groups.create');
    }

    public function store(Request $request)
    {
        $this->authGroupRepo->create($request->all());
        return redirect()->route('auth_groups.index');
    }

    public function edit($id)
    {
        $authGroup = $this->authGroupRepo->find($id);
        return view('auth_groups.edit', compact('authGroup'));
    }

    public function update(Request $request, $id)
    {
        $this->authGroupRepo->update($id, $request->all());
        return redirect()->route('auth_groups.index');
    }

    public function destroy($id)
    {
        $this->authGroupRepo->delete($id);
        return redirect()->route('auth_groups.index');
    }
}

