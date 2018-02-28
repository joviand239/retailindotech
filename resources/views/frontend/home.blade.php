@extends('frontend.layouts.frontend')

@section('meta_title', 'Home')

@section('meta_description', 'Our Homepage')

@section('content')

    <section id="home">
        <div class="banner">
            <ul id="home-slider" class="slider">
                <li class="item">
                    <div class="box" style="background: url('{!! url('/') !!}/assets/frontend/images/banner-image-1.jpg')">
                        <div class="container">
                            <div class="box-container">
                                <h2 class="title">Sistem Absensi dan Akses Kontrol</h2>
                                <p class="subtitle">
                                    Kami menawarkan absensi dan akses pintu biometrik dengan kualitas terbaik. Dilengkapi dengan aplikasi terbaik untuk digunakan di PC, WEB dan Cloud Bases Sistem.
                                </p>

                                <a href="#" class="btn secondary-btn">PELAJARI</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="box" style="background: url('{!! url('/') !!}/assets/frontend/images/banner-customer-service.jpg')">
                        <div class="container">
                            <div class="box-container">
                                <h2 class="title">Good Service is Our Priority</h2>
                                <p class="subtitle">
                                    Kami menawarkan layanan service produk absensi sidik jari dengan kualitas layanan terbaik. Dilengkapi dengan layanan booking service. Klik tombol di bawah ini.
                                </p>

                                <a href="#" class="btn secondary-btn">PELAJARI</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="section">

            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="card-info">

                            <i class="fa fa-handshake-o icon"></i>

                            <h3 class="name">Distributor Resmi</h3>

                            <p class="description">
                                Kami adalah distributor resmi produk FINGERTEC di Indonesia sejak tahun 2003.
                            </p>

                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="card-info">

                            <i class="fa fa-cloud-upload icon"></i>

                            <h3 class="name">Cloud Solution</h3>

                            <p class="description">
                                Cloud storage yang memudahkan anda untuk menyimpan dan membuka data kapanpun, dimanapun.
                            </p>

                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="card-info">

                            <i class="fa fa-cogs icon"></i>

                            <h3 class="name">Service Center</h3>

                            <p class="description">
                                Kami menawarkan layanan resmi untuk perbaikan dan maintenance produk FINGERTEC.
                            </p>

                        </div>
                    </div>
                </div>



            </div>


        </div>



        <div class="section sec-bg">

            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-12">
                        <h1 class="about-title">
                            Tentang<br>
                            Retail Indo<br>
                            Tech
                        </h1>
                    </div>
                    <div class="col-md-1 col-12">
                        <hr class="sec-line">
                    </div>
                    <div class="col-md-6 col-12">
                        <p>
                            <strong>PT. Retailindo Technology</strong> berdiri sejak th 2003, pada mulanya badan hukum kami berbentuk
                            CV dan Pada awal Tahun 2009 legalitas perusahaan menjadi berbadan hukum PT. Kami adalah
                            perusahaan yang melayani kebutuhan kehadiran/absensi karyawan dan akses control sidik jari
                            menjadi bisnis utama.
                        </p>
                        <p>
                            <strong>PT. Retailindo Technology</strong> memberikan komitmen untuk melakukan
                            pelayanan kebutuhan akan mesin absensi karyawan kepada para customernya. Retailindo
                            Technology menjual, service dan mendistribusikan produk sidik jari dengan merek <strong>FingerTec</strong>
                            yang sudah terbukti berkualitas, inovatif dan penyedia fasilitas informasi yang terlengkap
                        </p>

                        <a href="{!! route('about') !!}" class="arrow-btn"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="section">
            <div class="container">

                <h1 class="title">Produk Kami</h1>

                <hr>

                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="card-product">
                            <div class="image-wrapper">
                                <a href="#">
                                    <img class="image" src="{!! url('/') !!}/assets/frontend/images/fingerprint-recognition.jpg" alt="Fingerprint Recognition">
                                </a>
                            </div>

                            <div class="detail-wrapper">
                                <a href="#">
                                    <h3 class="title">Fingerprint Recognition</h3>
                                </a>
                                <p class="descriptionn">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget nisi mauris. Aenean vitae hendrerit.
                                </p>
                                <a href="#" class="btn secondary-btn">LIHAT</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="card-product">
                            <div class="image-wrapper">
                                <a href="#">
                                    <img class="image" src="{!! url('/') !!}/assets/frontend/images/face-recognition.jpg" alt="Face Recognition">
                                </a>
                            </div>

                            <div class="detail-wrapper">
                                <a href="#">
                                    <h3 class="title">Face Recognition</h3>
                                </a>
                                <p class="descriptionn">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget nisi mauris. Aenean vitae hendrerit.
                                </p>
                                <a href="#" class="btn secondary-btn">LIHAT</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="card-product">
                            <div class="image-wrapper">
                                <a href="#">
                                    <img class="image" src="{!! url('/') !!}/assets/frontend/images/rfid-card.jpg" alt="RFID Card">
                                </a>
                            </div>

                            <div class="detail-wrapper">
                                <a href="#">
                                    <h3 class="title">RFID Card</h3>
                                </a>
                                <p class="descriptionn">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget nisi mauris. Aenean vitae hendrerit.
                                </p>
                                <a href="#" class="btn secondary-btn">LIHAT</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="card-product">
                            <div class="image-wrapper">
                                <a href="#">
                                    <img class="image" src="{!! url('/') !!}/assets/frontend/images/qr-reader.jpg" alt="QR Reader">
                                </a>
                            </div>

                            <div class="detail-wrapper">
                                <a href="#">
                                    <h3 class="title">QR Reader</h3>
                                </a>
                                <p class="descriptionn">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget nisi mauris. Aenean vitae hendrerit.
                                </p>
                                <a href="#" class="btn secondary-btn">LIHAT</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="card-product">
                            <div class="image-wrapper">
                                <a href="#">
                                    <img class="image" src="{!! url('/') !!}/assets/frontend/images/controller.jpg" alt="Attendance Controller">
                                </a>
                            </div>

                            <div class="detail-wrapper">
                                <a href="#">
                                    <h3 class="title">Controller</h3>
                                </a>
                                <p class="descriptionn">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget nisi mauris. Aenean vitae hendrerit.
                                </p>
                                <a href="#" class="btn secondary-btn">LIHAT</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="card-product">
                            <div class="image-wrapper">
                                <a href="#">
                                    <img class="image" src="{!! url('/') !!}/assets/frontend/images/online-identification.jpg" alt="Online Identification">
                                </a>
                            </div>

                            <div class="detail-wrapper">
                                <a href="#">
                                    <h3 class="title">Online Identification</h3>
                                </a>
                                <p class="descriptionn">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget nisi mauris. Aenean vitae hendrerit.
                                </p>
                                <a href="#" class="btn secondary-btn">LIHAT</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="call-to-action-section">
            <div class="container">
                <div class="inline-wrapper">
                    <div>
                        <h1 class="title">Anda memiliki masalah teknis?</h1>
                        <h2 class="subtitle">Silahkan hubungi kami atau klik tombol ini.</h2>
                    </div>

                    <a href="#" class="cta-btn">
                        BOOKING SERVICE
                    </a>
                </div>
            </div>
        </div>

        <div class="section sec-bg">
            <div class="container">

                <div class="head">
                    <h1 class="title">Berita Terbaru Kami</h1>
                    <a href="#" class="btn secondary-btn">LIHAT SEMUA</a>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card-blog">
                            <div class="image-wrapper">
                                <a href="#">
                                    <img class="image" src="{!! url('/') !!}/assets/frontend/images/blog-image-1.jpg">
                                </a>
                            </div>

                            <div class="detail-wrapper">
                                <p class="date">29 February 2018</p>
                                <a href="#">
                                    <h3 class="title">
                                        Teknis dan Cara Kerja Mesin Sidik Jari
                                    </h3>
                                </a>
                                <p class="description">
                                    Manusia pada dasarnya memiliki sesuatu yang unik/khas yang hanya dimiliki oleh dirinya sendiri. Hal ini menimbulkan gagasan untuk menjadikan keunikan tersebut sebagai identitas diri.
                                </p>

                                <a href="#" class="link-btn">Lihat Detail <i class="fa fa-long-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card-blog">
                            <div class="image-wrapper">
                                <a href="#">
                                    <img class="image" src="{!! url('/') !!}/assets/frontend/images/blog-image-2.jpg">
                                </a>
                            </div>

                            <div class="detail-wrapper">
                                <p class="date">29 February 2018</p>
                                <a href="#">
                                    <h3 class="title">
                                        Cara Kerja Sistem Pengenal Wajah (Face Recognition)
                                    </h3>
                                </a>
                                <p class="description">
                                    Identix , sebuah perusahaan yang terdapat di Minnesota AS , adalah salah satu pengembang teknologi pengenal wajah . Dengan software yang bernama Facelt , mereka dapat mengambil gambar wajah seseorang meskipun berada pada kerumunan orang , memilah wajahnya dari tampilan gambar dan membandingkannya dengan gambar yang terdapat pada database .
                                </p>

                                <a href="#" class="link-btn">Lihat Detail <i class="fa fa-long-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card-blog">
                            <div class="image-wrapper">
                                <a href="#">
                                    <img class="image" src="{!! url('/') !!}/assets/frontend/images/blog-image-1.jpg">
                                </a>
                            </div>

                            <div class="detail-wrapper">
                                <p class="date">29 February 2018</p>
                                <a href="#">
                                    <h3 class="title">
                                        Perkembangan Mesin Absen Teknologi Manual Hingga Fingerprint
                                    </h3>
                                </a>
                                <p class="description">
                                    Perkembangan mesin absen pada dunia kerja merupakan suatu hal yang sangat penting, karena pada dunia kerja khususnya yang menggunakan gedung perkantoran, kita seringnya menjumpai mesin absensi karyawan yang terpasang di dekat pintu masuk atau salah satu sudut ruangan.
                                </p>

                                <a href="#" class="link-btn">Lihat Detail <i class="fa fa-long-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="call-to-action-section">
            <div class="container">
                <div class="inline-wrapper">
                    <div>
                        <h1 class="title">Anda memiliki pertanyaan bisnis?</h1>
                        <h2 class="subtitle">Silahkan hubungi kami atau klik tombol ini.</h2>
                    </div>

                    <a href="{!! route('contact') !!}" class="cta-btn">
                        KONTAK KAMI
                    </a>
                </div>
            </div>
        </div>



    </section>

@endsection

