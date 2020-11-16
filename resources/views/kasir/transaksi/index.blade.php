@extends('layouts.master')
@section('title','Transaksi')
@section('header', 'Transaksi')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form action="/transaction/insert">
                    <div class="header">
                        <h4 class="title">Transaksi</h4>
                        <button class="btn btn-info btn-fill pull-right" style="margin-bottom:20px">Tambah</button>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table id="data_transaksi" class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Jumlah Beli</th>
                                    <th>Total Harga</th>
                                    <th>Tanggal Beli</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transactions as $transaction)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$transaction->product->nama_barang}}</td>
                                    <td>{{$transaction->customer->nama}}</td>
                                    <td>{{$transaction->Jumlah_beli}}</td>
                                    <td>Rp {{number_format($transaction->total_harga)}}</td>
                                    <td>{{$transaction->tanggal_beli->format('Y-m-d')}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('script')
<script>
    $(document).ready(function(){
    $('#data_transaksi').DataTable();
});
</script>
@endsection





