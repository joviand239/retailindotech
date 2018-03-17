@extends('frontend.layouts.frontend')

@section('meta_title', 'Detail Berita')

@section('meta_description', 'Halaman Detail Berita')

@section('content')

    <section id="news">
        <div class="page-banner" style="background: url('{!! url('/') !!}/assets/frontend/images/banner-page.jpg')">

            <div class="container">
                <h1 class="page-title">
                    Teknis dan Cara Kerja Mesin Sidik Jari
                </h1>

                <hr>
            </div>

        </div>


        <div class="section">

            <div class="container">


                <div class="news-wrapper">

                    <p class="date">Jakarta - 29 February 2018</p>

                    <img class="image" src="{!! url('/') !!}/assets/frontend/images/blog-image-1.jpg">

                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>

                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    </p>

                    <p>
                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                    </p>




                    <div class="control-wrapper">

                        <a href="#" class="link-btn"><i class="fa fa-long-arrow-left"></i> Previous</a>


                        <a href="#" class="link-btn">Next <i class="fa fa-long-arrow-right"></i></a>

                    </div>

                </div>


            </div>


        </div>


    </section>

@endsection

