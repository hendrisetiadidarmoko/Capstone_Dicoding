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
                        <td>Rp{{ number_format($order->total, 2, ',', '.') }}</td>
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
                    @foreach ($order->orderStatuss as $key => $status)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ date('d F Y H:i', strtotime($status->date)) }}</td>
                            <td>{{ $status->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if ($order->orderStatuss[count($order->orderStatuss) - 1]->status == 'Konfirmasi Pembayaran')
                <div class="col-12">
                    <form action="{{ route('admin.changestatus') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-info w-100">Proses Order</button>
                        <input type="hidden" name="status" value="Order sedang diproses">
                        <input type="hidden" name="order_id" value="{{ $order->id }}">
                    </form>
                </div>
                <div class="col-12">
                    <form action="{{ route('admin.cancelorder') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger w-100">Batalkan Order</button>
                        <input type="hidden" name="order_id" value="{{ $order->id }}">
                    </form>
                </div>
            @elseif($order->orderStatuss[count($order->orderStatuss) - 1]->status == 'Order sedang diproses')
                <div class="col-12">
                    <form action="{{ route('admin.changestatus') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-info w-100">Kirim Order</button>
                        <input type="hidden" name="status" value="Order sedang dikirim">
                        <input type="hidden" name="order_id" value="{{ $order->id }}">
                    </form>
                </div>
            @endif
        </div>
    </div>
@endsection
