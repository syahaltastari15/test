@extends('layouts.master')
@section('title','Product')
@section('header', 'Product')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form action="/product/insert">
                    <div class="header">
                        <h4 class="title">Product data</h4>
                        <button class="btn btn-info btn-fill pull-right" style="margin-bottom:20px">Tambah</button>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table id="data_products" class="table table-hover table-striped" >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tipe</th>
                                    <th>Distributor</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Harga Barang</th>
                                    <th>Stok</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$product->nama_barang}}</td>
                                    <td>{{$product->type->type}}</td>
                                    <td>{{$product->distributor->nama_distributor}}</td>
                                    <td>{{$product->tanggal_masuk->format('Y-m-d')}}</td>
                                    <td>{{$product->harga_barang}}</td>
                                    <td>{{$product->stok_barang}}</td>
                                    <td>{{$product->keterangan}}</td>
                                    <td>{!! QrCode::size(100)->generate('/product/'.$product->id.'/show') !!}</td>
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
    $('#data_products').DataTable();
});
</script>
@endsection





