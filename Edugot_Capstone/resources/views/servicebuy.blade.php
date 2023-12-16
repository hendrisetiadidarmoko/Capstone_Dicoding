@extends('mainpage')
@section('content')
    <section class="vh-100">
        <div class="container h-100 ">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class=" col-12 col-sm-10 col-md-8 col-lg-8 col-xl-7 ">
                    <div class="card buy-container p-3 rounded">
                        <div class="card-body">
                            <h2 class="text-center card-title">Beli Maggot</h2>
                            <form method="POST" action="{{ route('payment') }}" enctype="multipart/form-data">
                                @csrf
                                <!-- Nama -->
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Masukkan nama Anda">
                                </div>

                                <!-- Alamat -->
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat Anda"></textarea>
                                </div>

                                <!-- Nomor Telepon -->
                                <div class="mb-3">
                                    <label for="nomor" class="form-label">Nomor Telepon</label>
                                    <input type="tel" class="form-control" id="nomor" name="nomor"
                                        placeholder="Masukkan nomor telepon Anda">
                                </div>

                                <div class="mb-3">
                                    <label for="maggotType" class="form-label">Jenis Maggot</label>
                                    <select class="form-select" id="maggotType" name="maggotType" aria-label="Pilih Jenis Maggot">
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}" price="{{ $product->price }}">
                                                {{ $product->name }} - Rp. {{ $product->price }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="row">
                                    <!-- Jumlah Barang -->
                                    <div class="col-md-6">
                                        <label for="quantity" class="form-label">Jumlah Maggot/Ons</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Jumlah"
                                            min="1" value="1">
                                    </div>

                                    <!-- Harga -->
                                    <div class="col-md-6">
                                        <label for="price" class="form-label">Harga</label>
                                        <div class="input-group">
                                            <span class="input-group-text">Rp</span>
                                            <input type="text" class="form-control" id="price" name="price" readonly>
                                        </div>
                                    </div>

                                </div>

                                <!-- Tombol Submit -->
                                <button type="submit" class="btn btn-primary w-100 my-4">Kirim</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $('#maggotType').on('change', function() {
            var price = $(this).find('option:selected').attr('price')
            var quantity = $('#quantity').val();

            var total = price * quantity;

            $('#price').val(total);
        });

        $('#quantity').on('input', function() {
            var price = $('#maggotType').find('option:selected').attr('price')
            var quantity = $('#quantity').val();

            var total = price * quantity;

            $('#price').val(total);
        });
    </script>
@endsection
