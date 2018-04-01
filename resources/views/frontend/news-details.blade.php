@extends('frontend.layouts.frontend')

@section('meta_title', 'Detail Berita')

@section('meta_description', 'Halaman Detail Berita')

@section('content')

    <section id="news">
        <div class="page-banner" style="background: url('{!! url('/') !!}/assets/frontend/images/banner-page.jpg')">

            <div class="container">
                <h1 class="page-title">
                    {!! @$detail->title !!}
                </h1>

                <hr>
            </div>

        </div>


        <div class="section">

            <div class="container">


                <div class="news-wrapper">

                    <p class="date">{!! getDateOnly(@$detail->publishDate) !!}</p>

                    <img class="image" src="{!! getImageUrlSize(@$detail->featuredImage[0], 'full') !!}">

                    {!! @$detail->content !!}




                    <div class="row mt-30">

                        <div class="col-6 text-left">
                            @if($previous)
                                <a href="{!! route('news-details', ['id' => @$previous->id]) !!}" class="link-btn"><i class="fa fa-long-arrow-left"></i> Previous</a>
                            @endif
                        </div>


                        <div class="col-6 text-right">
                            @if($next)
                                <a href="{!! route('news-details', ['id' => @$next->id]) !!}" class="link-btn">Next <i class="fa fa-long-arrow-right"></i></a>
                            @endif
                        </div>


                    </div>

                </div>


            </div>


        </div>


    </section>

@endsection

