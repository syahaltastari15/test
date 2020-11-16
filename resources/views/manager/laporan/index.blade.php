@extends('layouts.master')
@section('title','Laporan')
@section('header', 'Laporan')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Total Barang</h4>
                    </div>
                    <img class="text-center" src="{{asset('admin/assets/img/box.svg')}}" alt="" style="height: 100px; padding-left:25px; display:inline" >
                    <h2 style="display: inline; padding-left:10px">
                        {{$productsCount}}
                    </h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Total Pelanggan</h4>
                    </div>
                    <img class="text-center" src="{{asset('admin/assets/img/woman.svg')}}" alt="" style="height: 100px; padding-left:20px; display:inline" >
                    <h2 style="display: inline">
                        {{$customerCount}}
                    </h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Total Distributor</h4>
                    </div>
                    <img class="text-center" src="{{asset('admin/assets/img/shops.svg')}}" alt="" style="height: 100px; padding-left:30px; display:inline" >

                    <h2 style="display: inline; padding-left:10px">
                        {{$distributorsCount}}
                    </h2>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Stok Barang Yang Sudah Habis</h4>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" id="product_data">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($results as $result)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$result->nama_barang}}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td style="text-align: center;" colspan="2">Stok Barang Tidak Ada Yang Kosong <i class="fa fa-smile-o"></i></td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Barang Terbaru Bulan Ini</h4>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Tanggal Masuk</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dateProducts as $dateProduct)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$dateProduct->nama_barang}}</td>
                                    <td>{{$dateProduct->tanggal_masuk}}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td style="text-align: center;" colspan="2">Tidak Ada Barang<i class="fa fa-smile-o"></i></td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form action="/filter">
                    <div class="header">
                        <h4 class="title">Product data</h4>
                        <p class="catergory">Filter</p>
                            <select name="filter" id="filter"  style="height: 36px" >
                                <option value="">Short by</option>
                                <option value="stok">Stok</option>
                                <option value="tanggal">Tanggal Masuk</option>
                            </select>
                            <input  placeholder="Search" name="cari"  style="height: 36px;" type="text">
                            <span><button class="btn btn-info btn-fill" style="width: 100px" type="submit">Cari</button></span>
                        </form>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" name="product">
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




