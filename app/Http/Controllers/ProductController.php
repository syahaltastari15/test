<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type;
use App\Models\Distributor;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }

    public function create()
    {
        $types = Type::all();
        $distributors = Distributor::all();
        return view('admin.products.insert',compact('types','distributors'));
    }

    public function store(Request $request)
    {

        $validation = $request->validate([
            'nama_barang' => 'required|max:50',
            'type_id' => 'required',
            'distributor_id' => 'required',
            'tanggal_masuk' => 'required|date',
            'harga_barang' => 'required|numeric',
            'stok_barang' => 'required|numeric',
            'keterangan' => 'required|min:10',
        ]);

        $product = Product::create($request->all());
        return redirect('/product');
    }
}
