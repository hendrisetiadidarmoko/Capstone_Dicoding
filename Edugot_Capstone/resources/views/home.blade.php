@extends('mainpage')
@section('content')
    <section class="hero-element" id="hero">
        <div class="container-fluid banner">
            <div class="container text-center">
                <h1 class="display-4">Maggot Solusi untuk Pengelolaan Sampah Rumah Tangga </h1>
                <h3>Maggot, atau larva lalat Black Soldier Fly (BSF), merupakan salah satu solusi untuk pengelolaan
                    sampah organik. Maggot memiliki kemampuan untuk mengurai sampah organik dengan cepat dan
                    efisien.</h3>
                <a href="" class="btn btn-secondary btn-lg">Beli Sekarang</a>
            </div>
        </div>
    </section>
    <section>
        <div class="content-service container mt-3">
            <h2 class="text-center mb-3">Layanan yang Kami Sediakan</h2>
            <div class="container-service text-center">
                <div class="service rounded card ">
                    <a href="{{ route('service-buy') }}">
                        <i class="mdi mdi-store"></i>
                        <h3>Pembelian</h3>
                        <p>Untuk memudahkan masyarakat dalam memperoleh maggot secara online</p>
                    </a>
                </div>
                <div class="service rounded card mx-2">
                    <a href="">
                        <i class="mdi mdi-map-marker"></i>
                        <h3>Lokasi</h3>
                        <p>Memberikan informasi kepada masyarakat tentang lokasi peternak maggot di sekitar mereka.</p>
                    </a>
                </div>
                </a>
                <div class="service rounded card">
                    <a href="">
                        <i class="mdi mdi-chat"></i>
                        <h3>Konsultasi</h3>
                        <p>Membantu pengguna dalam pengelolaan sampah rumah tangga dengan menggunakan maggot..</p>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section class="description-content">
        <div class="container mt-5 ">
            <div class="row gx-5 ">
                <div class="col ">
                    <div class="box d-flex">
                        <div class="container-img">
                            <img src="{{ asset('../assets/image/Maggot.png') }}" alt="Ini Maggot" class="image">
                        </div>
                        <div class="box-top"></div>
                        <div class="box-bottom"></div>
                    </div>
                </div>
                <div class="description col">
                    <h2>Lorem ipsum dolor sit amet Vel proin nunc eget at in amet.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur. Volutpat felis varius venenatis morbi lectus
                        vestibulum. Sem sit lectus sit turpis scelerisque sed pretium amet. Nunc feugiat orci sit in
                        ut elementum.
                        Nisi varius massa volutpat eu viverra amet. Arcu mattis fames ornare urna mauris eu. Sapien
                        ut risus blandit duis adipiscing auctor tellus tincidunt. Ac sollicitudin mi sapien accumsan
                        nunc id non nisl aenean. Integer nunc mi est tristique.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="rectangle-img  my-4">
                <img src="{{ asset('../assets/image/Maggot.png') }}" alt="Ini Maggot">
            </div>
            <h2 clas="titleArticle">Artikel dari Edugot</h2>
            <hr>
            <div class=" row g-4 align-items-center mx-1 justify-content-center">
                <div class="col-12 col-xl-3 col-md-6 col-sm-10" style="width: 18rem;">
                    <div class="card">
                        <img src="{{ asset('../assets/image/sampah.png') }}" class="card-img-top" alt="Ini Artikel">
                        <div class="card-article card-body ">
                            <h5 class="card-title fw-semibold">Jenis-jenis Sampah dan Cara Pengelolaannya</h5>
                            <p class="card-text">Sampah organik, seperti sisa makanan, daun, dan sisa tumbuhan, bisa diubah
                                menjadi kompos yang berguna bagi tanaman.</p>
                            <a href="#" class="btn btn-article text-center w-100">Detail Artikel</article></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3 col-md-6 col-sm-10" style="width: 18rem;">
                    <div class="card">
                        <img src="{{ asset('../assets/image/sampah.png') }}" class="card-img-top" alt="Ini Artikel">
                        <div class="card-article card-body ">
                            <h5 class="card-title fw-semibold">Jenis-jenis Sampah dan Cara Pengelolaannya</h5>
                            <p class="card-text">Sampah organik, seperti sisa makanan, daun, dan sisa tumbuhan, bisa diubah
                                menjadi kompos yang berguna bagi tanaman.</p>
                            <a href="#" class="btn btn-article text-center w-100">Detail Artikel</article></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3 col-md-6 col-sm-10" style="width: 18rem;">
                    <div class="card">
                        <img src="{{ asset('../assets/image/sampah.png') }}" class="card-img-top" alt="Ini Artikel">
                        <div class="card-article card-body ">
                            <h5 class="card-title fw-semibold">Jenis-jenis Sampah dan Cara Pengelolaannya</h5>
                            <p class="card-text">Sampah organik, seperti sisa makanan, daun, dan sisa tumbuhan, bisa diubah
                                menjadi kompos yang berguna bagi tanaman.</p>
                            <a href="#" class="btn btn-article text-center w-100">Detail Artikel</article></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3 col-md-6 col-sm-10" style="width: 18rem;">
                    <div class="card">
                        <img src="{{ asset('../assets/image/sampah.png') }}" class="card-img-top" alt="Ini Artikel">
                        <div class="card-article card-body ">
                            <h5 class="card-title fw-semibold">Jenis-jenis Sampah dan Cara Pengelolaannya</h5>
                            <p class="card-text">Sampah organik, seperti sisa makanan, daun, dan sisa tumbuhan, bisa diubah
                                menjadi kompos yang berguna bagi tanaman.</p>
                            <a href="#" class="btn btn-article text-center w-100">Detail Artikel</article></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3 col-md-6 col-sm-10" style="width: 18rem;">
                    <div class="card">
                        <img src="{{ asset('../assets/image/sampah.png') }}" class="card-img-top" alt="Ini Artikel">
                        <div class="card-article card-body ">
                            <h5 class="card-title fw-semibold">Jenis-jenis Sampah dan Cara Pengelolaannya</h5>
                            <p class="card-text">Sampah organik, seperti sisa makanan, daun, dan sisa tumbuhan, bisa diubah
                                menjadi kompos yang berguna bagi tanaman.</p>
                            <a href="#" class="btn btn-article text-center w-100">Detail Artikel</article></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
