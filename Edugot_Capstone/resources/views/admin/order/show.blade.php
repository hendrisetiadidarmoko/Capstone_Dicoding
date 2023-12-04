@extends('admin.index')
@section('content')
    <div class="container">
        <h1><strong>Detail Order</strong></h1>
        @if (session('status'))
            <div class='alert alert-success'>
                {{ session('status') }}
            </div>
        @endif
        <div class="row mb-4">
            <div class="col-6">
                <h2>Data Pembeli</h2>
                <p class="mt-0 mb-0">Nama: {{ $order->buyer->name }}</p>
                <p class="mt-0 mb-0">Alamat: {{ $order->buyer->address }}</p>
                <p class="mt-0 mb-0">No. Telp: {{ $order->buyer->number_phone }}</p>
            </div>
            <div class="col-6">
                <h2>Data Transaksi</h2>
                <p class="mt-0 mb-0">Alamat Pengiriman: {{ $order->address }}</p>
                <p class="mt-0 mb-0">No. Telp Pengiriman: {{ $order->number_phone }}</p>
            </div>
        </div>
        <div class="row mb-4">
            <h2>Daftar Produk</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{ $order->product->name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>Rp{{ number_format($order->total, 2, ',','.') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <h2>Status Transaksi</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($order->orderStatuss as $key=>$status)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ date("d F Y H:i", strtotime($status->date)) }}</td>
                        <td>{{ $status->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
