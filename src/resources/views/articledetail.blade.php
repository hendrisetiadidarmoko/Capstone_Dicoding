@extends('mainpage');
@section('content')
    ;
    <section>
        <div class="container h-100">
            <div class="card border-0">
                <h1 class="card-title text-center mt-3 fw-bold" id="content-edugot">{{ $article->title }}</h1>
                <div class="row d-flex h-100">
                    <div class="col-12 col-xl-8  col-sm-7 mt-3">
                        <div class="card border-0">
                            <div class="card-body card-blog">
                                <img src="{{ asset($article->url_img) }}" alt="" class="w-100   mb-5 img-article">
                                <p class="card-text">{{ $article->content }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 col-sm-5 mt-3">
                        <div class="card ">
                            <div class="card-body card-blog p-0">
                                <div
                                    class="card-title-artikel p-2 d-flex align-items-center justify-content-center text-light">
                                    <h2 class="card-title text-center m-0 ">Dari</h2>
                                </div>

                                <div class="p-3">
                                    <h5 class="card-text fw-semibold">Penulis :</h5>
                                    <p class="card-text ">{{ $article->creator }}</p>
                                    <h5 class="card-text fw-semibold">Tanggal :</h5>
                                    <p class="card-text">{{ $article->release_date }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
