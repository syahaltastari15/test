<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return view('admin.types.index',compact('types'));
    }

    public function create()
    {
        return view('admin.types.insert');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'type' => "required"
        ]);

        $save = Type::create($request->all());
        return redirect('/type');
    }
    public function edit($id)
    {
        $edit = Type::find($id);
        return view('admin.types.edit',compact('edit'));
    }
    public function update(Request $request,$id)
    {
        $edit = Type::find($id);
        $edit->update([
            'type' => $request->type
        ]);
        return redirect('/type');
    }
    public function delete($id)
    {
        $edit = Type::find($id);
        $edit->delete();
        return redirect('/type');
    }
}

