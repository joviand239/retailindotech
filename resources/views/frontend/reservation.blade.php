@extends('frontend.layouts.frontend')

@section('meta_title', 'Form Reservasi')

@section('meta_description', 'Form Reservasi')

@section('content')

    <section id="contact">
        <div class="page-banner" style="background: url('{!! url('/') !!}/assets/frontend/images/banner-page.jpg')">

            <div class="container">
                <h1 class="page-title">
                    Form Reservasi
                </h1>

                <hr>
            </div>

        </div>





        <div class="section">

            <div class="container">

                <form action="{!! route('service-reservation-save') !!}" id="reservationForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8" enctype="multipart/form-data">

                    <!-- SmartWizard html -->
                    <div id="reservation-wizard">
                        <ul>
                            <li><a href="#step-1">Step 1<br /></a></li>
                            <li><a href="#step-2">Step 2<br /></a></li>
                        </ul>

                        <div>
                            <div id="step-1" class="">

                                <h3 class="title mb-30">Data Pribadi</h3>

                                <div id="form-step-0" class="box-form" role="form" data-toggle="validator">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name" class="required">Nama</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="company" class="required">Nama Perusahaan</label>
                                            <input type="text" class="form-control" id="company" name="company" placeholder="Nama Perusahaan" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="email" class="required">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="phone" class="required">No. Telepon</label>
                                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="No. Telepon" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <label for="address" class="required">Alamat</label>
                                            <textarea rows="5" class="form-control" id="address" name="address" placeholder="Alamat" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="city" class="required">Kota</label>
                                            <select class="form-control custom-select2" name="city" id="city" required>
                                                <option value="">- Pilih Kota -</option>

                                                @foreach(getListProvince() as $key => $list)
                                                    <optgroup label="{!! @$key !!}">
                                                        @foreach(@$list as $city)
                                                            <option value="{!! @$city !!}">{!! @$city !!}</option>
                                                        @endforeach
                                                    </optgroup>
                                                @endforeach


                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>


                                    <div class="btn-wrapper">
                                        <a class="btn sw-btn-next">Next step</a>
                                    </div>


                                </div>

                            </div>
                            <div id="step-2" class="">

                                <h3 class="title mb-30">Tanggal & Informasi Tambahan</h3>

                                <div id="form-step-1" class="box-form" role="form" data-toggle="validator">



                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="date" class="required">Tanggal</label>
                                            <input type="date" class="form-control" min='2018-03-17' name="date" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="time" class="required">Jam</label>
                                            <input type="time" class="form-control" name="time" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6 col-12">
                                            <label for="guaranteeNumber">Nomor Kartu Garansi</label>
                                            <input type="text" class="form-control" id="guaranteeNumber" name="guaranteeNumber">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <label for="description">Informasi Tambahan</label>
                                            <textarea rows="5" class="form-control" id="description" name="description" placeholder="description"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>



                                    <div class="btn-wrapper">
                                        <a class="btn sw-btn-prev">Previous</a>
                                        <a id="submitBtn" class="btn ladda-button" data-style="zoom-in">Submit</a>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>



    </section>

@endsection


@section('jsCustom')
    <script>
        var reservationForm = '{!! route('service-reservation-save') !!}';
    </script>



    <script src="{{ url('/') }}/assets/frontend/js/reservation.js"></script>
@endsection

