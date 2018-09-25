<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{!! route('home') !!}">
            <img src="{!! getImageUrlSize(getSettingAttribute('logo'), 'full') !!}" alt="Logo Retail Indo Tech">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{!! route('about') !!}">Tentang Kami</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropbtn" role="button">Produk</a>
                    <div class="dropdown-content">
                        @foreach(getProductMenu() as $item)
                            <a class="dropdown-item" href="{!! route('product-category', ['permalink' => @$item->permalink]) !!}">{!! @$item->name !!}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!! route('service') !!}">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!! route('news') !!}">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!! route('contact') !!}">Kontak Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>