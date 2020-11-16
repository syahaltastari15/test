@extends('layouts.master')
@section('title','Laporan Transaksi')
@section('header', 'Laproran Transaksi')
@section('content')

<div class="content">
    <div class="container-fluid">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form action="/transaction/insert">
                    <div class="header" style="margin-bottom:10px">
                        <h4 class="title" >Laporan Transaksi</h4>
                    </div>
                    <div class="counting">
                        <img src="{{asset('admin/assets/img/24-hours.svg')}}" alt="" style="height: 40px; padding-left:25px; display: inline; margin-bottom:20px">
                        <p style="display: inline">Jumlah Transaksi <strong> Hari Ini : {{$dayCount}}</strong>
                    </div>
                    <div class="counting">
                        <img src="{{asset('admin/assets/img/report.svg')}}" alt="" style="height: 40px; padding-left:25px; display: inline; margin-bottom:20px">
                        <p style="display: inline">Jumlah Transaksi <strong> Bulan Ini : {{$monthCount}}</strong>
                    </div>
                    <div class="counting">
                        <img src="{{asset('admin/assets/img/goals.svg')}}" alt="" style="height: 40px; padding-left:25px; display: inline; margin-bottom:20px">
                        <p style="display: inline">Jumlah Transaksi <strong> Tahun Ini : {{$yearCount}}</strong>
                    </div>
                </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Data Tahun InI</h4>
                    </div>

                    <div id="chartMonth">

                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Data Minggu InI</h4>
                    </div>
                    <div id="chartDay">

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form action="/transaction/insert">
                    <div class="header">
                        <h4 class="title">Laporan Transaksi</h4>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table id="data_transaksi" class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Jumlah Beli</th>
                                    <th>Total Harga</th>
                                    <th>Tanggal Beli</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transactions as $transaction)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$transaction->product->nama_barang}}</td>
                                    <td>{{$transaction->customer->nama}}</td>
                                    <td>{{$transaction->Jumlah_beli}}</td>
                                    <td>Rp {{number_format($transaction->total_harga)}}</td>
                                    <td>{{$transaction->tanggal_beli->format('Y-M-d')}}</td>
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
    $('#data_transaksi').DataTable();
});
</script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('chartMonth', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Penjualan Tahun InI'
    },

    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Transaksi'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',

        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Barang',
        data: {!!json_encode($sumMonth)!!}

    }]
});
</script>

<script>
    Highcharts.chart('chartDay', {
    chart: {
        type: 'areaspline'
    },
    title: {
        text: 'Penjualan Minggu InI'
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        verticalAlign: 'top',
        x: 150,
        y: 100,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF'
    },
    xAxis: {
        categories: [
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
            'Sunday'
        ],
        plotBands: [{ // visualize the weekend
            from: 4.5,
            to: 6.5,
            color: 'rgba(68, 170, 213, .2)'
        }]
    },
    yAxis: {
        title: {
            text: 'Jumlah Transaksi'
        }
    },
    tooltip: {
        shared: true,
        valueSuffix: ' units'
    },
    credits: {
        enabled: false
    },
    plotOptions: {
        areaspline: {
            fillOpacity: 0.5
        }
    },
    series: [{
        name: 'Barang',
        data: {!!json_encode($total)!!}
    }]
});
</script>
@endsection




