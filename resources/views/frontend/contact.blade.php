@extends('frontend.layouts.frontend')

@section('metaTitle', @$page->metaTitle)
@section('metaDescription', @$page->metaDescription)
@section('metaKeywords', @$page->metaKeywords)

@section('content')

    <section id="contact">
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
                <div class="row">
                    <div class="col-md-6 col-12">
                        <h3 class="small-title">Kirim pesan kepada kami</h3>

                        <form action="{!! route('submitContact') !!}" method="POST" data-toggle="validator">
                            <div class="form-group">
                                <input type="text" class="form-control custom" name="name" placeholder="Nama Lengkap" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control custom" name="email" placeholder="Email" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <textarea rows="5" class="form-control custom" name="message" placeholder="Pesan" required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                            <input type="hidden" class="form-control custom" name="type" value="{!! \App\Util\Constant::CONTACT_TYPE_FORM !!}">

                            <div class="form-group">
                               <button class="btn secondary-btn">KIRIM</button>
                            </div>
                        </form>

                    </div>

                    <div class="col-md-6 col-12">
                        <h3 class="small-title">Informasi Kontak</h3>

                        <div class="contact-info-wrapper">
                            {!! getSettingAttribute('contactInformation') !!}
                        </div>

                        <h3 class="small-title">Kunjungi kantor kami</h3>

                        {!! getSettingAttribute('googleMap') !!}
                    </div>
                </div>

            </div>
        </div>



    </section>

@endsection

