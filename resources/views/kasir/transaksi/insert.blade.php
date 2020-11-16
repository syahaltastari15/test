@extends('layouts.master')
@section('title','Product')
@section('header', 'Product')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Insert Product</h4>
                    </div>
                    <div class="content">
                        {!! Form::open(['url' => '/transaction/store']) !!}
                        <div class="form-group">
                            {!! Form::label('product_id', 'Nama barang') !!}
                            {!! Form::select('product_id', $products->pluck('nama_barang', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Pilih Nama Barang']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('customer_id', 'Nama Pelanggan') !!}
                            {!! Form::select('customer_id', $customers->pluck('nama', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Pilih Nama Pelanggan']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Jumlah_beli', 'Jumlah Beli') !!}
                            {!! Form::text('Jumlah_beli', '', ['class' => 'form-control', 'placeholder' => 'Masukan Jumlah Beli']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('tanggal_beli', 'Tanggal Beli') !!}
                            {!! Form::date('tanggal_beli', '', ['class' => 'form-control']) !!}
                        </div>
                            {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
