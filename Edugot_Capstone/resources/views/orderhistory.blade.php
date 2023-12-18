@extends('mainpage')
@section('content')
<section class="vh-100">
    <div class="container">
        <div class="catalog">
            <div class=" profile-message p-3">
                <h1 class="text-decoration-underline fw-bold mb-3">Pesanan</h1>
                @foreach($orders->$order)
                <div class="row my-2">
                    <div class="col-12 col-xl-2 mb-3 mb-md-0">
                        <img src="../img/Maggot.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-xl-10 d-flex">
                        <div class="d-flex mt-4 justify-content-between w-100">
                            <div>
                                <h3>Maggot Hidup</h3>
                                <p class="mb-0"><span>200</span>ons</p>
                                <p>Bibit</p>
                                <h4>Rp <span>50000</span></h4>
                            </div>
                            <div class="">
                                <div class="d-flex  justify-content-end align-items-end text-ends">

                                    <p class="send-service p-2 mx-2 rounded fw-semibold">Pesanan dikirim</p>
                                    <p class="green-service p-2 mx-2 rounded fw-semibold">Pesanan diterima</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
