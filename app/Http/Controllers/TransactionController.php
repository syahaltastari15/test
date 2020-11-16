<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Product;
use App\Models\Type;
use App\Models\Distributor;
use App\Models\Customer;
class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        return view('kasir.transaksi.index', compact('transactions'));
    }


    public function create()
    {
        $products = Product::all();
        $customers = Customer::all();
        return view('kasir.transaksi.insert', compact('products','customers'));
    }

    public function store(Request $request)
    {


        $product = Product::find($request->product_id);
        $jumlahStok = $product->stok_barang - $request->Jumlah_beli;
        $totalHarga = $request->Jumlah_beli * $product->harga_barang;

        $validation = $request->validate([
            'product_id' => 'required|',
            'customer_id' => 'required',
            'Jumlah_beli' => 'required|numeric|lte:'.$product->stok_barang.'',
            'tanggal_beli' => 'required|date',
        ]);

        $save = Transaction::create([
            'product_id' => $request->product_id,
            'customer_id' => $request->customer_id,
            'Jumlah_beli' => $request->Jumlah_beli,
            'total_harga' => $totalHarga,
            'tanggal_beli' => $request->tanggal_beli,
        ]);

        $product->update([
            'stok_barang' => $jumlahStok
        ]);

        return redirect('/transaction');
    }
}
