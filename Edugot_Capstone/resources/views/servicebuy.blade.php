@extends('mainpage')
@section('content')
<section class="vh-100">
    <div class="container h-100 ">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class=" col-12 col-sm-10 col-md-8 col-lg-8 col-xl-7 ">
                <div class="card buy-container p-3 rounded">
                    <div class="card-body">
                        <h2 class="text-center card-title">Beli Maggot</h2>
                        <form>
                            <!-- Nama -->
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama"
                                    placeholder="Masukkan nama Anda">
                            </div>

                            <!-- Alamat -->
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamat" placeholder="Masukkan alamat Anda"></textarea>
                            </div>

                            <!-- Nomor Telepon -->
                            <div class="mb-3">
                                <label for="nomor" class="form-label">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="nomor"
                                    placeholder="Masukkan nomor telepon Anda">
                            </div>

                            <div class="mb-3">
                                <label for="maggotType" class="form-label">Jenis Maggot</label>
                                <select class="form-select" id="maggotType" aria-label="Pilih Jenis Maggot">
                                    <option value="dewasa">Maggot Dewasa</option>
                                    <option value="child">Maggot Child</option>
                                </select>
                            </div>

                            <div class="row">
                                <!-- Jumlah Barang -->
                                <div class="col-md-6">
                                    <label for="quantity" class="form-label">Jumlah Maggot/Ons</label>
                                    <input type="number" class="form-control" id="quantity" placeholder="Jumlah"
                                        min="1" value="1" oninput="calculatePrice()">
                                </div>

                                <!-- Harga -->
                                <div class="col-md-6">
                                    <label for="price" class="form-label">Harga</label>
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" class="form-control" id="price" readonly>
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

<section>

</section>

<script src="./index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

<script>
    function calculatePrice() {
        // Dapatkan nilai jumlah barang
        var quantity = parseInt(document.getElementById('quantity').value);

        // Dapatkan nilai jenis maggot
        var maggotType = document.getElementById('maggotType').value;

        // Tentukan harga berdasarkan jumlah barang dan jenis maggot
        var price;

        if (maggotType === 'dewasa') {
            price = 10000 * quantity;
        } else if (maggotType === 'child') {
            price = 5000 * quantity; // Harga untuk maggot child
        }

        // Tampilkan harga di input harga
        document.getElementById('price').value = price;
    }
</script>
@endsection
