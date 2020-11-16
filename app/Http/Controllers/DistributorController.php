<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distributor;
class DistributorController extends Controller
{
    public function index()
    {
        $distributors = Distributor::all();
        return view('admin.distributor.index',compact('distributors'));
    }
    public function create()
    {
        return view('admin.distributor.insert');
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_distributor' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        $save = Distributor::create($request->all());
        return redirect('/distributor');
    }
}
