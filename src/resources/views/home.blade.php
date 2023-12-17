@extends('mainpage')
@section('content')
    <section class="hero-element" id="hero">
        <div class="container-fluid banner">
            <div class="container text-center">
                <h1 class="display-4">Maggot Solusi untuk Pengelolaan Sampah Rumah Tangga </h1>
                <h3>Maggot, atau larva lalat Black Soldier Fly (BSF), merupakan salah satu solusi untuk pengelolaan
                    sampah organik. Maggot memiliki kemampuan untuk mengurai sampah organik dengan cepat dan
                    efisien.</h3>
                <div class="btn btn-home-buy">
                    <a href="{{ route('checkout') }}" class="text-decoration-none fw-semibold">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="content-service container mt-3" id="content-edugot">
            <h2 class="text-center mb-3 fw-bold">Layanan yang Kami Sediakan</h2>
            <div class="container-service text-center">
                <div class="service rounded card ">
                    <a href="{{ route('checkout') }}">
                        <i class="mdi mdi-store"></i>
                        <h3 class="fw-semibold">Pembelian</h3>
                        <p>Untuk memudahkan masyarakat dalam memperoleh maggot secara online</p>
                    </a>
                </div>
                <div class="service rounded card mx-2">
                    <a href="{{ route('layanan') }}">
                        <i class="mdi mdi-map-marker"></i>
                        <h3 class="fw-semibold">Lokasi</h3>
                        <p>Memberikan informasi kepada masyarakat tentang lokasi peternak maggot di sekitar mereka.</p>
                    </a>
                </div>
                </a>
                <div class="service rounded card">
                    <a href="">
                        <i class="mdi mdi-chat"></i>
                        <h3 class="fw-semibold">Konsultasi</h3>
                        <p>Membantu pengguna dalam pengelolaan sampah rumah tangga dengan menggunakan maggot..</p>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section class="description-content">
        <div class="container mt-5 ">
            <div class="row gx-3 ">
                <div class="col ">
                    <div class="box box-img d-flex ">
                        <div class="container-img">
                            <img src="{{ asset('../assets/image/Leading-Maggot-Farmer.jpg') }}" alt="Maggot"
                                class="image">
                        </div>
                        <div class="box-top"></div>
                        <div class="box-bottom"></div>
                    </div>
                </div>
                <div class="description col">
                    <h2 class="fw-bold">KENAPA HARUS MAGGOT?</h2>
                    <p>Karna maggot adalah solusi terbaik untuk mengurangi sampah organik dan maggot dalam pengelolaan
                        sampah organik juga menghadirkan manfaat ekologis dan ekonomis. Larva lalat dapat menghasilkan pupa
                        yang kaya nutrisi, dapat digunakan sebagai pakan ternak atau sumber protein alternatif. Dengan
                        memanfaatkan maggot, kita tidak hanya mengurangi sampah organik tetapi juga menciptakan peluang
                        untuk mendaur ulang sumber daya dan menghasilkan produk bernilai tambah. </p>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class=" d-flex align-items-center mb-3 detail-home">
                <h2 clas="titleArticle fw-bold ">Artikel Terbaru dari Edugot</h2>
            </div>
            <div class=" row g-4 align-items-center mx-1 justify-content-center">
                @foreach ($articles as $article)
                    <div class="col-12 col-xl-3 col-md-6 col-sm-10" style="width: 18rem;">
                        <div class="card">
                            <img src="{{ asset($article->url_img) }}" class="card-img-top" alt="Ini Artikel">
                            <div class="card-article card-body ">
                                <h5 class="card-title fw-semibold">{{ $article->title }}</h5>
                                @if (strlen($article->content) > 100)
                                    <p class="card-text">{{ substr($article->content, 0, 100) }}...</p>
                                @else
                                    <p class="card-text">{{ $article->content }}</p>
                                @endif
                                <a href="{{ route('article.showDetail', $article->id) }}" class="btn btn-article text-center w-100 d-flex align-items-center text-center justify-content-center fw-semibold">Detail
                                    Artikel</article></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
