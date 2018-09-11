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

            <li class="dropdown {!! isActiveRoute(['admin.bookings']) !!}" >
                <a href="{!! route('admin.bookings') !!}">
                    <div class="icon">
                        <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
                    </div>
                    <div class="title">Reservasi</div>
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

            <li class="dropdown {!! isActiveRoute(['admin.blogs']) !!}" >
                <a href="{!! route('admin.blogs') !!}">
                    <div class="icon">
                        <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                    </div>
                    <div class="title">Berita</div>
                </a>
            </li>

            <li class="dropdown {!! isActiveRoute(['admin.contacts']) !!}">
                <a href="#">
                    <div class="icon">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="title">Contact</div>
                </a>

                <div class="dropdown-menu">
                    <ul>
                        <li class="dropdown">
                            <a href="{!! route('admin.contacts') !!}">Contact Form</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="{!! isActiveRoute(['admin.setting']) !!}">
                <a href="{!! route('admin.setting') !!}">
                    <div class="icon">
                        <i class="fa fa-gears" aria-hidden="true"></i>
                    </div>
                    <div class="title">Setting</div>
                </a>
            </li>
        </ul>
    </div>
</aside>

