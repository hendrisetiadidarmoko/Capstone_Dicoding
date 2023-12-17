@extends('admin.index');
@section('content');
    <div class="container">
        <h1>Tambah Stok Produk</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                @foreach ($errors->all() as $err)
                    <p class="mt-0 mb-0">{{ $err }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('product.updateStock', $product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="stok">Stok (per 100 ons)</label>
                <input type="number" name="product-stock" id="productStock" class="form-control"
                    placeholder="Masukkan penambahan jumlah stok produk Anda disini" min="1" required>
            </div><br>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-info btn-fill pull-right">Tambah Stok</button>
                </div>
            </div>
            <div class="clearfix"></div>
        </form>
    </div>
@endsection
