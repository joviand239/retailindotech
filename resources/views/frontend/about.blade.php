@extends('frontend.layouts.frontend')

@section('metaTitle', @$page->metaTitle)
@section('metaDescription', @$page->metaDescription)
@section('metaKeywords', @$page->metaKeywords)

@section('content')

    <section id="about">
        <div class="page-banner" style="background: url({!! getImageUrlSize(@$page->bannerImage[0], 'full') !!})">

            <div class="container">
                <h1 class="page-title">
                    {!! @$page->bannerText !!}
                </h1>

                <hr>
            </div>

        </div>


        <div class="section">

            <div class="container">
                <h1 class="title">

                </h1>


                <div class="row">
                    <div class="col-md-6 col-12">
                        <h1 class="title">Tentang Retailindotech</h1>

                        <hr class="sec-small">

                        {!! @$page->description !!}
                    </div>

                    <div class="col-md-6 col-12">
                        <h1 class="title">Visi</h1>

                        <hr class="sec-small">


                        {!! @$page->vision !!}

                        <h1 class="title">Misi</h1>

                        <hr class="sec-small">

                        {!! @$page->mission !!}


                    </div>


                </div>



            </div>


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


    </section>

@endsection

