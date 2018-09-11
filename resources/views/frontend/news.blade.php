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

                    @foreach(@$list as $item)
                        <div class="col-md-4">
                            <div class="card-blog">
                                <div class="image-wrapper">
                                    <a href="{!! route('news-details', ['permalink' => @$item->permalink]) !!}">
                                        <img class="image" src="{!! getImageUrlSize(@$item->featuredImage, 'full') !!}">
                                    </a>
                                </div>

                                <div class="detail-wrapper">
                                    <p class="date">{!! getDateOnly(@$item->publishDate) !!}</p>
                                    <a href="{!! route('news-details', ['permalink' => @$item->permalink]) !!}">
                                        <h3 class="title">
                                            {!! @$item->title !!}
                                        </h3>
                                    </a>
                                    <p class="description">
                                        {!! @$item->summary !!}
                                    </p>

                                    <a href="{!! route('news-details', ['permalink' => @$item->permalink]) !!}" class="link-btn">Lihat Detail <i class="fa fa-long-arrow-right"></i></a>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>


    </section>

@endsection

