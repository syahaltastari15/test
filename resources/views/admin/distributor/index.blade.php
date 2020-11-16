@extends('layouts.master')
@section('title','Distributor')
@section('header', 'Distributor')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <form action="/distributor/insert">
                    <div class="header">
                        <h4 class="title">Distributor</h4>
                        <button class="btn btn-info btn-fill pull-right" style="margin-bottom:20px">Tambah</button>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table id="data_distributors" class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Distributor</th>
                                    <th>Alamat</th>
                                    <th>Nomor Telepon</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($distributors as $distributor)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$distributor->nama_distributor}}</td>
                                    <td>{{$distributor->alamat}}</td>
                                    <td>{{$distributor->no_telp}}</td>
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
    $('#data_distributors').DataTable();
});
</script>
@endsection




