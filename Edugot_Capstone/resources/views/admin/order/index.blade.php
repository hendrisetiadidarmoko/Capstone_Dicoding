@extends('admin.index')
@section('content')
    <div class="container">
        <h1>Daftar Order</h1>
        @if (session('status'))
            <div class='alert alert-success'>
                {{ session('status') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Nama Pembeli</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Nomor Hp</th>
                    <th class="text-center">Produk yang Dibeli</th>
                    <th class="text-center">Jumlah</th>
                    <th class="text-center">Subtotal</th>
                    <th class="text-center">Tanggal Transaksi</th>
                    <th class="text-center">Status Transaksi(Yang terakhir)</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if (count($orders) > 0)
                    @foreach ($orders as $order)
                        <tr>
                            <td class="text-center">{{ $order->id }}</td>
                            <td>{{ $order->buyer->name }}</td>
                            <td>{{ $order->address }}</td>
                            <td>{{ $order->number_phone }}</td>
                            <td>{{ $order->product->name }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>Rp{{ number_format($order->total, 2, ',', '.') }}</td>
                            <td>{{ date('d F Y', strtotime($order->date)) }}</td>
                            <td>{{ $order->orderStatuss[count($order->orderStatuss) - 1]->status }}</td>
                            <td><a href="{{ route('order.show', $order->id) }}"
                                class="btn btn-fill btn-info w-100">Detail</a></td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="text-center" colspan="7">Belum ada data produk apapun</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
