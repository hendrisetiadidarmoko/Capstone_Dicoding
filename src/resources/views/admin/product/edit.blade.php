@extends('admin.index');
@section('content');
    <div class="container">
        <h1>Ubah Data Produk</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                @foreach ($errors->all() as $err)
                    <p class="mt-0 mb-0">{{ $err }}</p>
                @endforeach
            </div>
        @endif
        <form method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="product-id" value="{{ $product->id }}">
            <div class="form-group">
                <label for="gambar">Upload Foto Produk</label>
                <input type="file" accept="application/images" name="product-url" id="productUrl"
                    class="form-control-file" required>
            </div><br>
            <div class="form-group">
                <label for="nama">Nama Produk</label>
                <input type="text" name="product-name" id="productName" class="form-control"
                    placeholder="Masukkan nama produk Anda" required value="{{ $product->name }}">
            </div><br>
            <div class="form-group">
                <label for="harga">Harga (dalam Rupiah)</label>
                <input type="number" name="product-price" id="productPrice" class="form-control"
                    placeholder="Masukkan harga produk Anda" min="0" required value="{{ $product->price }}">
            </div><br>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" name="product-description" id="productDescription" rows="3"
                    placeholder="Masukkan deskripsi produk Anda" required>{{ $product->description }}</textarea>
            </div><br>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-info btn-fill pull-right">Ubah Produk</button>
                </div>
            </div>
            <div class="clearfix"></div>
        </form>
    </div>
@endsection
