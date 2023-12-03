<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edugot</title>
    <!-- Import icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Import Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('../assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/header-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/headfoot.css') }}">
</head>

<body>
    <header>
        <div class="container-head">
            <div class="logo">
                <div>
                    <h5>Logo</h5>
                </div>
                <h3>Edugot</h3>
            </div>
            <div id="iconsearch">
                <i class="fa-solid fa-magnifying-glass" style="color: #f0e7e7;"></i>
            </div>
            <div class="search">
                <form action="">
                    <input type="text" placeholder="Cari informasi maggot...">
                    <button><i class="fa-solid fa-magnifying-glass" style="color: #f0e7e7;"></i></button>
                </form>
            </div>
            <div class="hamburger">
                <i class="fa-solid fa-bars" id="hamburgerIcon" style="color: #f0e7e7;"></i>
            </div>
            <nav class="navMenu">
                <ul>
                    <li><a href="/" class="active">Beranda</a></li>
                    <li><a href="#">Layanan</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="/about">Tentang kami</a></li>
                    <li><a href="{{ url('login') }}" id="login">Masuk</a></li>
                </ul>
            </nav>
            <div class="Authentication">
                <a href="{{ url('login') }}" id="loginLink">Masuk</a>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col col-3">
                    <a href="">
                        <h1>LOGO</h1>
                    </a>
                    <a href="">
                        <h4 class="fs-6">Tageline Perusahaan</h4>
                    </a>
                </div>
                <div class="col col-3">
                    <h2>Informasi</h2>
                    <a href="">
                        <h4>Testimoni</h4>
                    </a>
                    <a href="">
                        <h4>Blog</h4>
                    </a>
                    <a href="">
                        <h4>Metode Pembayaran</h4>
                    </a>
                    <a href="">
                        <h4>Garansi Pengiriman</h4>
                    </a>
                    <a href="">
                        <h4>Pusat Bantuan</h4>
                    </a>
                </div>
                <div class="col col-3">
                    <h2>Kontak</h2>
                    <a href="">
                        <h4>Email</h4>
                    </a>
                    <a href="">
                        <h4>Lokasi</h4>
                    </a>
                    <a href="">
                        <h4>FAQ</h4>
                    </a>
                </div>
                <div class="col col-3">
                    <h2>Sosial Media</h2>
                    <h4><span class="mdi mdi-instagram"><a href="">Instagram</a> </span></h4>
                    <h4><span class="mdi mdi-youtube"><a href="">Youtube</a></span></h4>
                    <h4><span class="mdi mdi-twitter"><a href="">Twitter</a></span></h4>
                    <h4><span class="mdi mdi-facebook"><a href="">Facebook</a></span></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <h4>Copyright © 2023 Edugot</h4>
                </div>
                <div class="col-md-auto">
                    <a href="">
                        <h4>Keamanan & Privasi</h4>
                    </a>
                </div>
                <div class="col col-lg-2">
                    <a href="">
                        <h4>Pusat Bantuan</h4>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('../assets/js/headfoot.js') }}"></script>
</body>

</html>
