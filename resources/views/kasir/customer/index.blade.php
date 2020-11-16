@extends('layouts.master')
@section('title','Customer')
@section('header', 'Customer')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <form action="/customer/insert">
                    <div class="header">
                        <h4 class="title">Customer data</h4>
                        <button class="btn btn-info btn-fill pull-right" style="margin-bottom:20px">Tambah</button>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table id="data_customers" class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $customer)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$customer->nama}}</td>
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
    $('#data_customers').DataTable();
});
</script>
@endsection




