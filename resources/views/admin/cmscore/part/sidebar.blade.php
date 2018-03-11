<aside class="app-sidebar" id="sidebar">
    <div class="sidebar-header">
        <img class="img-responsive logo-admin" style="padding-top:20px;" src="{{ url('/') }}/assets/admin/image/logo.png"/>
        <button type="button" class="sidebar-toggle">
            <i class="fa fa-times"></i>
        </button>
    </div>
    <div class="sidebar-menu">
        <ul class="sidebar-nav">
            <li class="dropdown" >
                <a href="{{ url('/admin/cms/Page') }}">
                    <div class="icon">
                        <i class="fa fa-info" aria-hidden="true"></i>
                    </div>
                    <div class="title">Konten</div>
                </a>
                <div class="dropdown-menu">
                    <ul>
                        <li class="dropdown">
                            <a href="{{ url('/admin/cms/Page') }}">Halaman Informasi</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="dropdown {!! isActiveRoute(['admin.products']) !!}" >
                <a href="{!! route('admin.products') !!}">
                    <div class="icon">
                        <i class="fa fa-archive" aria-hidden="true"></i>
                    </div>
                    <div class="title">Product</div>
                </a>
            </li>

            <li class="dropdown {!! isActiveRoute(['admin.items']) !!}" >
                <a href="{!! route('admin.items') !!}">
                    <div class="icon">
                        <i class="fa fa-cubes" aria-hidden="true"></i>
                    </div>
                    <div class="title">Item</div>
                </a>
            </li>

            <li class="dropdown {!! isActiveRoute(['admin.customerdetails']) !!}" >
                <a href="{!! route('admin.customerdetails') !!}">
                    <div class="icon">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="title">Customer</div>
                </a>
            </li>

            <li class="dropdown {!! isActiveRoute(['admin.guarantees']) !!}" >
                <a href="{!! route('admin.guarantees') !!}">
                    <div class="icon">
                        <i class="fa fa-address-card-o" aria-hidden="true"></i>
                    </div>
                    <div class="title">Guarantee Card</div>
                </a>
            </li>
        </ul>
    </div>
</aside>

