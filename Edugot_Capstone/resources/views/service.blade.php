@extends('mainpage')
@section('content')
    <section>
        <div class="d-flex flex-column mx-auto align-items-center mt-7">
            <div class="">
                <h2 class="fw-bold text-center">Persebaran Toko Offline Maggot</h2>
            </div>

            <div class="d-flex justify-content-center">
                <div class="row align-items-center container-lg">
                    <div id="map" style="width: 80vw; height:80vh;"></div>
                </div>
            </div>
        </div>

    </section>
    <section>
        <div class="container mt-5">
            <h2 class="fw-bold text-center">Katalog Produk</h2>
            <div class="row service-img-sell p-3">
                <div class="col-12 col-xl-2 mb-3 mb-md-0">
                    <img src="{{ asset('../assets/image/Maggot.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-xl-8 mt-4">
                    <h3 class="fw-semibold">Maggot Hidup</h3>
                    <p>Produk larva maggot hidup berkualitas</p>
                    <div class="stock">
                        <p>stock :</p>
                        <p class="fw-semibold">xxxx</p>
                    </div>
                    <h4>tersedia di daerah: Jawa Timur</h4>
                </div>
                <div class="col-12 col-xl-2 position-relative p-0">
                    <p class="mb-5 p-3 fw-semibold">Rp xx.xxx,xx / ons</p>
                    <div class="position-absolute w-100 bottom-0 p-3">
                        <a href="#" class="btn btn-buy text-center w-100 bottom-0 fw-semibold">Detail Artikel</a>
                    </div>

                </div>
            </div>
            <div class="row justify-content-end p-3 ">
                <div class="col-xl-2 col-sm-4">
                    <div class="admin-question ">

                        <a href="#" class="btn btn-admin text-center w-100 fw-semibold"><i
                                class="bi bi-info-circle me-2 "></i>Detail Artikel</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
