@extends('frontend.layouts.frontend')

@section('meta_title', @$page->metaTitle)

@section('meta_description', @$page->metaDescription)

@section('content')

    <section id="home">
        <div class="banner">
            <ul id="home-slider" class="slider">

                @foreach(@$page->bannerSlider as $key => $item)
                    <li class="item">
                        <div class="box" style="background: url({!! getImageUrlSize($item->image[0], 'full') !!})">
                            <div class="container">
                                <div class="box-container">
                                    <h2 class="title">{!! @$item->title !!}</h2>
                                    <p class="subtitle">
                                        {!! @$item->subtitle !!}
                                    </p>

                                    <a href="{!! route($item->buttonLink) !!}" class="btn secondary-btn">{!! @$item->buttonText !!}</a>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <div id="anchor" class="section">

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
                        {!! @$about->summary !!}

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
                    @foreach(@$product as $item)
                        <div class="col-md-4 col-12">
                            <div class="card-product">
                                <div class="image-wrapper">
                                    <a href="{!! route('product-category', ['url' => @$item->url]) !!}">
                                        <img class="image" src="{!! getImageUrlSize(@$item->cardImage[0], 'full') !!}" alt="Fingerprint Recognition">
                                    </a>
                                </div>

                                <div class="detail-wrapper">
                                    <a href="{!! route('product-category', ['url' => @$item->url]) !!}">
                                        <h3 class="title">{!! @$item->name !!}</h3>
                                    </a>
                                    <p class="descriptionn">
                                        {!! @$item->summary !!}
                                    </p>
                                    <a href="{!! route('product-category', ['url' => @$item->url]) !!}" class="btn secondary-btn">LIHAT</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
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

                    <a href="{!! route('service-reservation') !!}" class="cta-btn">
                        BOOKING SERVICE
                    </a>
                </div>
            </div>
        </div>

        <div class="section sec-bg">
            <div class="container">

                <div class="head">
                    <h1 class="title">Berita Terbaru Kami</h1>
                    <a href="{!! route('news') !!}" class="btn secondary-btn">LIHAT SEMUA</a>
                </div>

                <hr>

                <div class="row">

                    @foreach(@$blog as $item)
                        <div class="col-md-4">
                            <div class="card-blog">
                                <div class="image-wrapper">
                                    <a href="{!! route('news-details', ['id' => @$item->id]) !!}">
                                        <img class="image" src="{!! getImageUrlSize(@$item->featuredImage[0], 'full') !!}">
                                    </a>
                                </div>

                                <div class="detail-wrapper">
                                    <p class="date">{!! getDateOnly(@$item->publishDate) !!}</p>
                                    <a href="{!! route('news-details', ['id' => @$item->id]) !!}">
                                        <h3 class="title">
                                            {!! @$item->title !!}
                                        </h3>
                                    </a>
                                    <p class="description">
                                        {!! @$item->summary !!}
                                    </p>

                                    <a href="{!! route('news-details', ['id' => @$item->id]) !!}" class="link-btn">Lihat Detail <i class="fa fa-long-arrow-right"></i></a>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>

@endsection

