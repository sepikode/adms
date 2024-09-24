<?php

namespace App\Http\Controllers;

use App\Repositories\AttParamRepositoryInterface;
use Illuminate\Http\Request;

class AttParamController extends Controller
{
    protected $attParamRepo;

    public function __construct(AttParamRepositoryInterface $attParamRepo)
    {
        $this->attParamRepo = $attParamRepo;
    }

    public function index()
    {
        $params = $this->attParamRepo->all();
        return view('att_param.index', compact('params'));
    }

    public function create()
    {
        return view('att_param.create');
    }

    public function store(Request $request)
    {
        $this->attParamRepo->create($request->all());
        return redirect()->route('att_param.index');
    }

    public function edit($id)
    {
        $param = $this->attParamRepo->find($id);
        return view('att_param.edit', compact('param'));
    }

    public function update(Request $request, $id)
    {
        $this->attParamRepo->update($id, $request->all());
        return redirect()->route('att_param.index');
    }

    public function destroy($id)
    {
        $this->attParamRepo->delete($id);
        return redirect()->route('att_param.index');
    }
}

