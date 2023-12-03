@extends('admin.index')
@section('content')
    <div class="container">
        <h1>Daftar Produk</h1>
        <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">
            <i class='bx bx-plus'></i> Tambah Produk
        </a>

        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Nama Produk</th>
                    <th class="text-center">Gambar Produk</th>
                    <th class="text-center">Harga</th>
                    <th class="text-center">Stok</th>
                    <th class="text-center">Deskripsi</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if(count($products)> 0)
                @foreach ($products as $product)
                    <tr>
                        <td class="text-center">{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>
                            <div>
                                <img class="img-fluid mb-3" src="{{ asset($product->url_img) }}" style="max-height:200px" />
                            </div>
                        </td>
                        <td>Rp{{ number_format($product->price, 2, ',', '.') }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <a href="{{ route('product.showAddStock', $product->id) }}"
                                class="btn btn-fill btn-info">Tambah Stok</a>
                            <a href="{{ route('product.edit', $product->id) }}"
                                class="btn btn-fill btn-info">Ubah</a>
                            <form method="POST" action="{{ route('product.destroy', $product->id) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Hapus" class="btn btn-danger btn-fill"
                                    onclick="return confirm('Apakah Anda ingin menghapus produk dengan products {{ $product->id }} - {{ $product->name }}?')">
                            </form>
                        </td>
                    </tr>
                @endforeach
                @endif

                <tr>
                    <td class="text-center" colspan="7">Belum ada products produk apapun</td>
                </tr>

                {{-- <tr>
                    <td>Ini gambar</td>
                    <td>Produk 1</td>
                    <td>10000</td>
                    <td>10</td>
                    <td>ini deskripsi</td>
                    <td>
                        <button class="btn btn-info btn-sm mr-2">
                            Ubah
                        </button>
                        <button class="btn btn-danger btn-sm">
                            Hapus
                        </button>
                    </td>
                </tr> --}}
            </tbody>
        </table>
    </div>
@endsection
