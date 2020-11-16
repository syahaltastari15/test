@extends('layouts.master')
@section('title','Type')
@section('header', 'Type')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Insert Type</h4>
                    </div>
                    <div class="content">
                        {!! Form::open(['url' => '/type/'.$edit->id.'/update']) !!}
                        <div class="form-group">
                            {!! Form::label('type', 'Tipe') !!}
                            {!! Form::text('type', $edit->type ,['class' => 'form-control', 'placeholder' => 'Masukan Tipe' ]) !!}
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
