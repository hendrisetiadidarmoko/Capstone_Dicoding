@extends('mainpage')
@section('content')
    <section class="vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card border-0">
                        <div class="card-body  profile-container rounded">
                            <h2 class="card-title text-decoration-underline fw-bold ">Profile</h2>
                            <form action="">
                                <div class="row">

                                    <div class="col-12 col-md-8">
                                        <h5 class="card-text">Nama</h5>
                                        <p class="card-text">{{ $buyer->name }}</p>
                                        <h5 class="card-text">Email</h5>
                                        <p class="card-text">{{ $buyer->user->email }}</p>
                                        <h5 class="card-text">No HP</h5>
                                        <p class="card-text">{{ $buyer->number_phone }}</p>
                                        <h5 class="card-text">Alamat</h5>
                                        <p class="card-text">{{ $buyer->address }}</p>
                                        <a href="#">Riwayat Transaksi</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        let imagesInp = document.getElementById("images");
        let imagesLab = document.getElementById("image-label");

        imagesInp.onchange = function() {
            imagesLab.src = URL.createObjectURL(imagesInp.files[0]);
        }
    </script>
@endsection
