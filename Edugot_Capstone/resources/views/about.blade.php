@extends('mainpage')
@section('content')
    <section>
        <div class="container mt-4 ">
            <h2 class="fw-bold text-center mb-4">Visi & Misi</h2>
            <div class="row">
                <div class="col col-6 descripsi">
                    <p class="lh-sm">"Menyongsong Masa Depan Bersih dan Berkelanjutan: Menjadi kekuatan utama di ranah
                        pengelolaan sampah rumah tangga di Indonesia, kami bertekad untuk memimpin perubahan menuju
                        lingkungan yang lebih bersih, sehat, dan berkelanjutan. Dengan memanfaatkan inovasi larva lalat
                        hitam (Hermetia illucens), kami berkomitmen untuk menciptakan revolusi dalam cara kita memandang,
                        mengelola, dan merespons tantangan sampah di negeri ini"

                    </p>
                    <ol>
                        <li class="lh-sm">
                            <p class="lh-sm">Mengurangi Jumlah Sampah Organik:Menyediakan solusi efektif dan berkelanjutan
                                untuk mengurangi jumlah sampah organik di Indonesia dengan memanfaatkan potensi luar biasa
                                dari larva lalat hitam (maggot).</p>
                        </li>
                        <li class="lh-sm">
                            <p class="lh-sm">Edukasi dan Penyadaran Masyarakat:Meningkatkan kesadaran masyarakat tentang
                                manfaat maggot dalam pengelolaan sampah rumah tangga, memberdayakan mereka untuk
                                berpartisipasi aktif dalam meminimalkan dampak negatif sampah terhadap lingkungan.</p>
                        </li>
                        <li class="lh-sm">
                            <p class="lh-sm">Integrasi Teknologi dan Pengelolaan Sampah:Memanfaatkan teknologi dan platform
                                web untuk memudahkan akses dan distribusi maggot kepada masyarakat, serta menyediakan sumber
                                daya dan informasi terkait pengelolaan sampah rumah tangga.</p>
                        </li>
                        <li class="lh-sm">
                            <p class="lh-sm">Kemitraan dan Kolaborasi:Bekerjasama dengan pemerintah, LSM, dan organisasi
                                lingkungan untuk membangun kemitraan yang kuat dan kolaborasi yang dapat mendukung upaya
                                pengelolaan sampah yang berkelanjutan di seluruh Indonesia.
                            </p>
                        </li>
                        <li class="lh-sm">
                            <p class="lh-sm">Budidaya Maggot yang Bertanggung Jawab:Memberikan panduan dan pelatihan kepada
                                masyarakat untuk memastikan bahwa budidaya maggot dilakukan dengan mematuhi standar keamanan
                                dan kesehatan tinggi, serta meminimalkan dampak negatif terhadap lingkungan sekitar.
                            </p>
                        </li>
                    </ol>
                </div>
                <div class="col col-6 img-visiMisi">
                    <img src="{{ asset('../assets/image/logo.jpg') }}" alt="logo" class="w-100 h-100">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-4">
            <h2 class="text-center fw-bold">Product Kami</h2>
            <div class="product w-100 d-flex position-relative" style="background-color: aqua;">
                <div class='trapesium position-absolute text-center'>
                    <div class="p-1 d-flex flex-column align-items-center">
                        <p class="px-2">"Optimalkan pengurangan sampah organik dengan memanfaatkan larva lalat serta
                            menghasilkan nilai tambah ekonomi."</p>
                        <div class="w-100 d-flex justify-content-center">
                            <div class="btn-link ">
                                <a href="" class="btn p-1 fw-bold ">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="inverted-trapesium d-flex justify-content-end">
                    <img src="{{ asset('../assets/image/magoots.png') }}" alt="magot">
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <div class=" container mt-4 text-center">
            <h2 class=" fw-bold mb-4">Team Kami</h2>
            <div class="team">
                <div class=" row g-5 align-items-center mx-1 justify-content-center">
                    <div class="col-12 col-xl-4 col-md-6 col-sm-10">
                        <div class="card rounded bg-body-secondary equal-height-card">
                            <img src="{{ asset('../assets/image/logo.jpg') }}" class="card-img-top  pt-3 px-5" alt="..."
                                style="height: 20rem;">
                            <div class="card-body team-card">
                                <h3 class="card-title fw-bold">Annastia Reza Dzulhaj</h3>
                                <p class="card-text">Project Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 col-md-6 col-sm-10">
                        <div class="card rounded bg-body-secondary equal-height-card">
                            <img src="{{ asset('../assets/image/logo.jpg') }}" class="card-img-top  pt-3 px-5" alt="..."
                                style="height: 20rem;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Hendri Setiadi Darmoko</h3>
                                <p class="card-text">FrontEnd Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 col-md-6 col-sm-10">
                        <div class="card rounded bg-body-secondary equal-height-card">
                            <img src="{{ asset('../assets/image/logo.jpg') }}" class="card-img-top  pt-3 px-5" alt="..."
                                style="height: 20rem;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Khoirul Gunawan</h3>
                                <p class="card-text">UI/UX Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4  col-md-6 col-sm-10">
                        <div class="card rounded bg-body-secondary equal-height-card">
                            <img src="{{ asset('../assets/image/logo.jpg') }}" class="card-img-top  pt-3 px-5" alt="..."
                                style="height: 20rem;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Vincentius Christian</h3>
                                <p class="card-text">BackEnd Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 col-md-6 col-sm-10">
                        <div class="card rounded bg-body-secondary equal-height-card">
                            <img src="{{ asset('../assets/image/logo.jpg') }} " class="card-img-team card-img-top  pt-3 px-5" alt="..."
                                style="height: 20rem;">
                            <div class="card-body">
                                <h3 class="card-title fw-bold">Landewank FF</h3>
                                <p class="card-text">DevOps Engineer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
