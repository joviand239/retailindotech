@extends('frontend.layouts.frontend')

@section('meta_title', 'Kontak Kami')

@section('meta_description', 'Kontak Kami')

@section('content')

    <section id="contact">
        <div class="page-banner" style="background: url('{!! url('/') !!}/assets/frontend/images/banner-page.jpg')">

            <div class="container">
                <h1 class="page-title">
                    Kontak Kami
                </h1>

                <hr>
            </div>

        </div>





        <div class="section">

            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <h3 class="small-title">Kirim pesan kepada kami</h3>

                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control custom" name="name" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control custom" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea rows="5" class="form-control custom" name="message" placeholder="Pesan"></textarea>
                            </div>

                            <div class="form-group">
                               <button class="btn secondary-btn">KIRIM</button>
                            </div>
                        </form>

                    </div>

                    <div class="col-md-6 col-12">
                        <h3 class="small-title">Kunjungi kantor kami</h3>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6981903380006!2d106.80969931420402!3d-6.171150662191907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f67bfd4326bb%3A0x36b37af4a4f242a4!2sJl.+Balikpapan+No.23%2C+Petojo+Sel.%2C+Gambir%2C+Kota+Jakarta+Pusat%2C+Daerah+Khusus+Ibukota+Jakarta+10160!5e0!3m2!1sen!2sid!4v1519832749718" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>



    </section>

@endsection

