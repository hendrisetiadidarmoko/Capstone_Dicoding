@extends('mainpage')
@section('content')

    <section>
        <div class="container mt-5">
            <h2 class="fw-bold text-center" id="content-edugot">Katalog Produk</h2>
            @foreach($products as $product)
            <div class="row service-img-sell p-3 my-4">
                <div class="col-12 col-xl-2 mb-3 mb-md-0">
                    <img src="{{ asset($product->url_img) }}" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-xl-8 mt-4">
                    <h3 class="fw-semibold">{{ $product->name }}</h3>
                    <p>{{ $product->description }}</p>
                    <div class="stock">
                        <p>stock :</p>
                        <p class="fw-semibold">{{ $product->stock }}</p>
                    </div>
                    <h4>tersedia di daerah: Jawa Timur</h4>
                </div>
                <div class="col-12 col-xl-2 position-relative p-0">
                    <p class="mb-5 p-3 fw-semibold">Rp {{ $product->price }} <span>/ ons</span> </p>
                    <div class="position-absolute w-100 bottom-0 p-1 ">
                        <a href="{{ route('checkout') }}" class="btn btn-buy text-center w-100 bottom-0 fw-semibold d-flex align-items-center justify-content-center">Beli</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    
    <section>
        <div class="d-flex flex-column mx-auto align-items-center mt-5">
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
    
@endsection
