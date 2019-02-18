<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('metaTitle') | {!! env('PROJECT_NAME') !!}</title>
    <meta name="description" content="@yield('metaDescription')">
    <meta name="keywords" content="@yield('metaKeywords')">

    <!-- Bootstrap -->
    @include('frontend.layouts.part.css')

    @yield('cssCustom')

</head>

<body>
    @include('frontend.layouts.part.header')

    @yield('content')

    @include('frontend.layouts.part.footer')

    @include('frontend.layouts.part.modal')

    <div class="floating-share active">
        <div id="btn-share"></div>

        <ul class="share-list active">
            <li class="item mail-share">
                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site {!! url()->current() !!}">
                    <i class="fa fa-envelope"></i>
                </a>
            </li>
            <li class="item twitter-share">
                <i class="fa fa-twitter"></i>
            </li>
            <li class="item facebook-share">
                <i class="fa fa-facebook"></i>
            </li>
            <li class="item whatsapp-share d-sm-none">
                <i class="fa fa-whatsapp"></i>
            </li>
        </ul>
    </div>

    @include('frontend.layouts.part.js')

    @yield('jsCustom')
</body>
</html>
