@extends('admin.index')
@section('content')
    <div class="container">
        <h1>Daftar Artikel</h1>

        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $article->url_img }}" class="card-img-top" alt="Gambar Artikel">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ $article->content }}</p>
                            <p class="card-text">Tanggal Rilis: {{ $article->release_date }}</p>
                            <p class="card-text">Penulis: {{ $article->author }}</p>
                            <p class="card-text">Pembuat: {{ $article->creator }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
