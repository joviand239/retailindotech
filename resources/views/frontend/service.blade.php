@extends('frontend.layouts.frontend')

@section('meta_title', 'Layanan')

@section('meta_description', 'Layanan')

@section('content')

    <section id="contact">
        <div class="page-banner" style="background: url('{!! url('/') !!}/assets/frontend/images/banner-page.jpg')">

            <div class="container">
                <h1 class="page-title">
                    Layanan
                </h1>

                <hr>
            </div>

        </div>





        <div class="section">

            <div class="container">

                <div class="row align-items-center mb-30">
                    <div class="col-md-4 col-12">
                        <div class="circle-icon-wrapper">
                            <i class="fa fa-commenting-o"></i>
                        </div>
                    </div>
                    <div class="col-md-8 col-12">
                        <p>Kami memberikan pelayanan live chat 24/7 untuk memudahkan anda berkomunikasi dengan customer service expert kami, yang akan membantu dan menjawab semua pertanyaan anda. segera chat dengan kami dengen klik tautan dibawah kanan anda.</p>
                    </div>
                </div>



                <div class="row align-items-center">
                    <div class="col-md-4 order-md-2 col-12">
                        <div class="circle-icon-wrapper">
                            <i class="fa fa-calendar-plus-o"></i>
                        </div>
                    </div>
                    <div class="col-md-8 order-md-1 text-md-right col-12">
                        <p>Kami memberikan pelayanan service resmi untuk produk <b>FINGERTEC.</b> bila Anda memerlukan bantuan teknis dan maintenance, Anda dapat mengisi form dengan menekan tombol di bawah ini. Selanjutnya tim kami akan segera menghubungi Anda</p>
                        <a href="{!! route('service-reservation') !!}" class="btn secondary-btn auto-width">RESERVASI SEKARANG</a>
                    </div>
                </div>


            </div>
        </div>



    </section>

@endsection

