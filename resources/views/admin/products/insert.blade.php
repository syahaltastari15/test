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
                        {!! Form::open(['url' => '/product/store']) !!}
                        <div class="form-group">
                            {!! Form::label('nama_barang', 'Nama Barang') !!}
                            {!! Form::text('nama_barang', '',['class' => 'form-control', 'placeholder' => 'Masukan Nama Barang' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('type_id', 'Tipe') !!}
                            {!! Form::select('type_id', $types->pluck('type', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Pilih Tipe']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('distributor', 'Distributor') !!}
                            {!! Form::select('distributor_id', $distributors->pluck('nama_distributor', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Pilih Distributor']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('tanggal_masuk', 'Tanggal Masuk') !!}
                            {!! Form::date('tanggal_masuk', '', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('harga_barang', 'Harga Barang') !!}
                            {!! Form::text('harga_barang', '',['class' => 'form-control', 'placeholder' => 'Masukan Harga Barang' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('stok_barang', 'Stok Barang') !!}
                            {!! Form::number('stok_barang', '', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('keterangan', 'Keterangan Barang') !!}
                            {!! Form::textarea('keterangan', '', ['class' => 'form-control', 'placeholder' => 'Keterangan']) !!}
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
