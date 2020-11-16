@extends('layouts.master')
@section('title','Customer')
@section('header', 'Customer')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Insert Customer</h4>
                    </div>
                    <div class="content">
                        {!! Form::open(['url' => '/customer/store']) !!}
                        <div class="form-group">
                            {!! Form::label('nama', 'Distributor') !!}
                            {!! Form::text('nama', '',['class' => 'form-control', 'placeholder' => 'Masukan Nama Pelanggan' ]) !!}
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
