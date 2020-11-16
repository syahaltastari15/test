@extends('layouts.master')
@section('title','Distributor')
@section('header', 'Distributor')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Insert Distributor</h4>
                    </div>
                    <div class="content">
                        {!! Form::open(['url' => '/distributor/store']) !!}
                        <div class="form-group">
                            {!! Form::label('nama_distributor', 'Distributor') !!}
                            {!! Form::text('nama_distributor', '',['class' => 'form-control', 'placeholder' => 'Masukan Nama Distributor' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('alamat', 'Alamat') !!}
                            {!! Form::textarea('alamat', '',['class' => 'form-control', 'placeholder' => 'Masukan Alamat' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('no_telp', 'Nomer Telepon') !!}
                            {!! Form::text('no_telp', '',['class' => 'form-control', 'placeholder' => 'Masukan Nomer Telepon' ]) !!}
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
