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

                <form action="" id="reservationForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8" enctype="multipart/form-data">

                    <!-- SmartWizard html -->
                    <div id="reservation-wizard">
                        <ul>
                            <li><a href="#step-1">Step 1<br /></a></li>
                            <li><a href="#step-2">Step 2<br /></a></li>
                        </ul>

                        <div>
                            <div id="step-1" class="">

                                <h3 class="title mb-30">Personal Detail</h3>

                                <div id="form-step-0" class="box-form" role="form" data-toggle="validator">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="pic">Person In Charge</label>
                                            <input type="text" class="form-control" id="pic" name="pic" placeholder="Person In Charge" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="company">Company Name</label>
                                            <input type="text" class="form-control" id="company" name="company" placeholder="Company Name" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="phone">Phone</label>
                                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <label for="address">Address</label>
                                            <textarea rows="5" class="form-control" placeholder="Address" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="city">City</label>
                                            <select class="form-control" name="city" id="city" required>
                                                <option value="0">- Select City -</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>


                                    <div class="btn-wrapper">
                                        <a class="btn sw-btn-prev">Previous</a>
                                        <a class="btn sw-btn-next">Next step</a>
                                    </div>


                                </div>

                            </div>
                            <div id="step-2" class="">

                                <h3 class="title mb-30">Booking Date & Description</h3>

                                <div id="form-step-0" class="box-form" role="form" data-toggle="validator">

                                </div>


                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>



    </section>

@endsection

