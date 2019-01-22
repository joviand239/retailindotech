<div class="call-to-action-section">
    <div class="container">
        <div class="inline-wrapper">
            <div>
                <h1 class="title">Anda memiliki pertanyaan bisnis?</h1>
                <h2 class="subtitle">Silahkan hubungi kami atau klik tombol ini.</h2>
            </div>

            <a href="{!! route('contact') !!}" class="cta-btn">
                KONTAK KAMI
            </a>
        </div>
    </div>
</div>

<footer id="footer-top">

    <div class="container">
        <div class="row">

            <div class="col-md-5">
                <img class="icon" src="{!! getImageUrlSize(getSettingAttribute('logo'), 'full') !!}" alt="{!! env('PROJECT_NAME') !!} Logo">
                <p class="mb-30">
                    {!! getSettingAttribute('companyDetail') !!}
                </p>

                <h2 class="head-title">Subscribe</h2>


                <form action="{!! route('submitContact') !!}" method="POST" data-toggle="validator">
                    <div class="form-group input-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                        <input type="hidden" class="form-control custom" name="type" value="{!! \App\Util\Constant::CONTACT_TYPE_SUBSCRIBE !!}">
                        <span class="input-group-btn">
                            <button class="btn secondary-btn inline ladda-button" data-style="zoom-in" type="submit">KIRIM</button>
                       </span>
                    </div>
                </form>
            </div>

            <div class="col-md-3">
                <h2 class="head-title">Kantor Pusat</h2>

                <p>
                    {!! getSettingAttribute('address') !!}
                </p>

                <table>
                    <tr>
                        <td class="bold secondary-color">
                            Phone.
                        </td>
                        <td class="text-right">
                            {!! getSettingAttribute('phone') !!}
                        </td>
                    </tr>

                    <tr>
                        <td class="bold secondary-color">
                            Fax.
                        </td>
                        <td class="text-right">
                            {!! getSettingAttribute('fax') !!}
                        </td>
                    </tr>

                    <tr>
                        <td class="bold secondary-color">
                            Email.
                        </td>
                        <td class="text-right">
                            {!! getSettingAttribute('email') !!}
                        </td>
                    </tr>

                    <tr>
                        <td class="bold secondary-color">
                            Website.
                        </td>
                        <td class="text-right">
                            {!! getSettingAttribute('website') !!}
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-md-4">
                <h2 class="head-title">Informasi Kontak</h2>

                <div class="contact-info-wrapper">
                    {!! getSettingAttribute('contactInformation') !!}
                </div>

            </div>
        </div>
    </div>
</footer>

<footer id="footer-btm">

    <div class="container">
        <p class="copyright">
            © Hak Cipta 2018 PT. Retailindo Technology. Hak Cipta dilindungi Undang-undang.
        </p>
    </div>

</footer>