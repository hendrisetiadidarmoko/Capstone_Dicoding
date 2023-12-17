@extends('admin.index')
@section('content')
    <div class="container">
        <h1>Tambah Artikel</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                @foreach ($errors->all() as $err)
                    <p class="mt-0 mb-0">{{ $err }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="gambar" class="form-label">Foto Artikel</label>
                <input type="file" accept="application/images" name="article-url" id="articleUrl" class="form-control"
                    required>
            </div><br>
            <div class="form-group">
                <label for="judul">Judul Artikel</label>
                <input type="text" name="article-title" id="articleTitle" class="form-control"
                    placeholder="Masukkan judul artikel Anda" required>
            </div><br>
            <div class="form-group">
                <label for="konten">Isi Artikel</label>
                <textarea class="form-control" name="article-content" id="articleContent" rows="3"
                    placeholder="Masukkan deskripsi produk Anda" required></textarea>
            </div><br>
            <div class="form-group">
                <label for="author">Pengarang</label>
                <input type="text" name="article-creator" id="articleCreator" class="form-control"
                    placeholder="Masukkan nama Anda" required>
            </div><br>
            <div class="row">
                <div class="col-md-12"><button type="submit" class="btn btn-info btn-fill pull-right">Tambah
                        Produk</button>
                </div>
            </div>
            <div class="clearfix"></div>
        </form>
    </div>
@endsection
