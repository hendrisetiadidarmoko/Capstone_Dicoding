@extends('admin.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img src="{{ asset($article->url_img) }}" alt="" style="max-height: 200px; object-fit:contain;">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>{{ $article->title }} | {{ date('d F Y', strtotime($article->release_date)) }}</h2>
                <p>Author: {{ $article->creator }}</p>
                <p>{{ $article->content }}</p>
            </div>
        </div>
    </div>
@endsection
