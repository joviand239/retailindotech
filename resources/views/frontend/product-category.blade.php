@extends('frontend.layouts.frontend')

@section('meta_title', @$product->metaTitle)

@section('meta_description', @$product->metaDescription)

@section('content')

    <section id="product">
        <div class="page-banner" style="background: url({!! getImageUrlSize($product->bannerImage[0], 'full') !!})">

            <div class="container">
                <h1 class="page-title">
                    {!! @$product->name !!}
                </h1>

                <hr>
            </div>

        </div>


        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="nav-wrapper">

                            <h3 class="tab-title">KATEGORI</h3>

                            <ul class="nav" role="tablist">
                                @foreach(@$categories as $item)
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab-{!! @$item->id !!}" data-toggle="tab" href="#tab-content-{!! @$item->id !!}" role="tab" aria-controls="tab-content-{!! @$item->id !!}" aria-selected="true">{!! @$item->name !!}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>


                    <div class="col-md-8 col-12">
                        <h3 class="tab-title">MODEL</h3>

                        <div class="tab-content">
                            @foreach(@$model as $key => $list)
                                <div class="tab-pane fade" id="tab-content-{!! @$key !!}" role="tabpanel" aria-labelledby="tab-content-{!! @$key !!}">
                                    @foreach(@$list as $item)
                                        <div class="model-wrapper">
                                            <div class="image-wrapper">
                                                <img src="{!! getImageUrlSize(@$item->featuredImage[0], 'full') !!}">
                                            </div>
                                            <div class="detail-wrapper">
                                                <h4 class="description">Description</h4>

                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <p class="attr">Surface Finishing : </p>
                                                                        <p class="value">{!! @$item->surfaceFinishing !!}</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="attr">Type Of Scanner : </p>
                                                                        <p class="value">{!! @$item->typeOfScanner !!}</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p class="attr">Microprocessor : </p>
                                                                        <p class="value">{!! @$item->microprocessor !!}</p>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <table>
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <p class="attr">Memory : </p>
                                                                    <p class="value">{!! @$item->memory !!}</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p class="attr">Algorithm : </p>
                                                                    <p class="value">{!! @$item->algorithm !!}</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p class="attr">Dimension (MM)  : </p>
                                                                    <p class="value">{!! @$item->dimension !!}</p>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>


                                                <a href="#" class="link-btn">Lihat Detail <i class="fa fa-long-arrow-right"></i></a>


                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>
        </div>







    </section>

@endsection

