@extends('admin.index')
@section('content')
    <div class="container">
        <h1>Daftar Artikel</h1>
        <a href="{{ route('article.create') }}" class="btn btn-primary mb-3">
            <i class='bx bx-plus'></i> Tambah Artikel
        </a>

        @if (session('status'))
            <div class='alert alert-success'>
                {{ session('status') }}
            </div>
        @endif

        <div class="row">
            @if (count($articles) > 0)
                @foreach ($articles as $article)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ asset($article->url_img) }}" class="card-img-top" alt="Gambar Artikel"
                                style="max-height: 200px; object-fit:contain">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text">Tanggal Rilis: {{ date('d F Y', strtotime($article->release_date)) }}
                                </p>
                                <p class="card-text">Penulis: {{ $article->creator }}</p>
                                @if(strlen($article->content)>50)
                                <p class="card-text">{{ substr($article->content, 0, 50) }}...</p>
                                @else
                                <p class="card-text">{{ $article->content }}</p>
                                @endif
                                <div class="row mb-2">
                                    <div class="col-12">
                                        <a href="{{ route('article.show', $article->id) }}"
                                            class="btn btn-fill btn-info w-100">Baca
                                            selengkapnya</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6 mb-1">
                                        <a href="{{ route('article.edit', $article->id) }}"
                                            class="btn btn-fill btn-info w-100">Ubah</a>
                                    </div>
                                    <div class="col-xs-12 col-md-6 mb-1">
                                        <form method="POST" action="{{ route('article.destroy', $article->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Hapus" class="btn btn-danger btn-fill w-100"
                                                onclick="return confirm('Apakah Anda ingin menghapus data artikel {{ $article->id }} - {{ $article->name }}?')">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Belum ada data artikel</p>
            @endif
        </div>
    </div>
@endsection
