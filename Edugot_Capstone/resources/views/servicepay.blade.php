@extends('mainpage')
@section('content')
    <section class="vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card" style="border-radius: 10px;
                background: #F3F0F0;">
                        <div class="card-servic card-body ">
                            <form method="POST" action="{{ route('home') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row color-service my-3 py-3">
                                    <div class="col-6">
                                        <h3 class="card-text ">Batas akhir struk pemesanan</h3>
                                        <div class="today" id="todayDate">
                                        </div>
                                    </div>
                                    <div class="col-6 ">
                                        <div class="countdown text-end" id="countdownTimer">

                                        </div>
                                    </div>
                                </div>
                                <div class="row color-service my-3 py-3">
                                    <div class="col-10">
                                        <h4 class="card-text ">Mandiri Virtual Account</h4>
                                    </div>
                                    <div class="col-2">
                                        <img src="../img/mandiri.png" alt="mandiri">

                                    </div>
                                    <h3 class="card-text">Nomor virtual account</h3>
                                    <div class="col-9">
                                        <h4 class="no-rek card-text" id="accountNumber">1234566789101112</h4>

                                    </div>
                                    <div class="col-3 text-end">
                                        <p class="copy-icon card-text" id="copyButton" onclick="copyAccountNumber()"><i
                                                class="bi bi-copy"></i>Salin</p>

                                    </div>
                                </div>
                                <div class="row color-service my-3 py-2">

                                    <div class="col-12">
                                        <h3 class="card-text">Pesanan</h3>
                                        <p class="card-text">{{ $productName }} <span> {{ $quantity }}</span>ons</p>
                                    </div>
                                </div>

                                <div class="row color-service my-3 py-2">
                                    <h3 class="card-text">Total pembelian</h3>

                                    <div class="col-3">
                                        <p id="paymentMoney card-text">Rp <span>{{ $price }}</span></p>
                                    </div>
                                    <div class="col-9">
                                        <p class="copy-icon" id="copyButton" onclick="copyPaymentMoney()"><i
                                                class="bi bi-copy"></i>Salin</p>

                                    </div>
                                </div>
                                <input type="hidden" name="nama" value="{{ $name }}">
                                <input type="hidden" name="alamat" value="{{ $address }}">
                                <input type="hidden" name="notelp" value="{{ $phoneNumber }}">
                                <input type="hidden" name="productId" value="{{ $productBuy }}">
                                <input type="hidden" name="quantity" value="{{ $quantity }}">
                                <input type="hidden" name="price" value="{{ $price }}">

                                <div class="row color-service my-3 py-2">
                                    <h3 class="card-text">Bukti pembayaran</h3>
                                    <input type="file" accept="image/jpeg, image/png, image/jpg" name="buktiPembayaran"
                                        id="buktiPembayaran " class="mt-2 mb-0" />
                                    <p class="small card-text ">Pilih file gambar (JPEG, PNG, JPG) sebagai bukti pembayaran.
                                    </p>

                                </div>
                                <button type="submit" class="btn btn-primary w-100 my-4">Selesai</button>

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <p class="mt-0 mn-1">{{ $error }}</p>
                                        @endforeach
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
@endsection

@section('script')
    <script>
        var currentDate = new Date();
        var daysOfWeek = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        var dayOfWeek = daysOfWeek[currentDate.getDay()];
        var formattedDate = currentDate.toISOString().split('T')[0];
        var todayInfo = dayOfWeek + ', ' + formattedDate;
        document.getElementById('todayDate').textContent = todayInfo;

        var targetDate = new Date();
        targetDate.setMinutes(targetDate.getMinutes() + 5);

        function updateCountdown() {
            var currentDate = new Date();
            var timeDifference = targetDate - currentDate;
            var minutes = Math.floor(timeDifference / 60000);
            var seconds = Math.floor((timeDifference % 60000) / 1000);
            document.getElementById('countdownTimer').textContent = minutes + ' menit ' + seconds + ' detik';
            if (timeDifference <= 0) {
                document.getElementById('countdownTimer').textContent = 'Waktu Habis';
                window.location.href = 'buymaggot.html';
                clearInterval(countdownInterval);
            }
        }
        updateCountdown();
        var countdownInterval = setInterval(updateCountdown, 1000);

        function copyAccountNumber() {
            var accountNumber = document.getElementById('accountNumber').innerText;
            var tempInput = document.createElement('input');
            tempInput.value = accountNumber;
            document.body.appendChild(tempInput);
            tempInput.select();
            tempInput.setSelectionRange(0, 99999); /* For mobile devices */
            document.execCommand('copy');
            document.body.removeChild(tempInput);
            alert('Nomor rekening disalin: ' + accountNumber);
        }

        function copyPaymentMoney() {
            var paymentMoney = document.getElementById('paymentMoney').innerText;
            var tempInput = document.createElement('input');
            tempInput.value = paymentMoney;
            document.body.appendChild(tempInput);
            tempInput.select();
            tempInput.setSelectionRange(0, 99999); /* mobile devices */
            document.execCommand('copy');
            document.body.removeChild(tempInput);
            alert('Uang disalin: ' + paymentMoney);
        }
    </script>
@endsection
