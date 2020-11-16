@extends('layouts.master')
@section('title','Tipe')
@section('header', 'Tipe')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <form action="/type/insert">
                    <div class="header">
                        <h4 class="title">Tipe</h4>
                        <button class="btn btn-info btn-fill pull-right" style="margin-bottom:20px">Tambah</button>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table id="data_types" class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Tipe</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($types as $type)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$type->type}}</td>
                                    <td align="center">
                                        <a href="/type/{{$type->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
										<a href="/type/{{$type->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Untuk Menghapus Data?')"><i class="fa fa-trash"></i></a>
                                    </td>
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
    $('#data_types').DataTable();
});
</script>
@endsection




