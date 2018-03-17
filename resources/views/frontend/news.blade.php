@extends('frontend.layouts.frontend')

@section('meta_title', 'Berita')

@section('meta_description', 'Halaman Berita')

@section('content')

    <section id="news">
        <div class="page-banner" style="background: url('{!! url('/') !!}/assets/frontend/images/banner-page.jpg')">

            <div class="container">
                <h1 class="page-title">
                    Berita
                </h1>

                <hr>
            </div>

        </div>


        <div class="section">

            <div class="container">

                <div class="row">

                    <div class="col-md-4">
                        <div class="card-blog">
                            <div class="image-wrapper">
                                <a href="{!! route('news-details') !!}">
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


    </section>

@endsection

