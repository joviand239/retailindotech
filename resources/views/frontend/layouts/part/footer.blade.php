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
                <img class="icon" src="{!! url('/') !!}/assets/frontend/images/logo.png" alt="{!! env('PROJECT_NAME') !!} Logo">
                <p>
                    {!! GetAboutByKey('footerSummary') !!}
                </p>
            </div>

            <div class="col-md-3">
                <h2 class="head-title">Kantor Pusat</h2>

                <p>
                    {!! GetAboutByKey('address') !!}
                </p>

                <table>
                    <tr>
                        <td class="bold secondary-color">
                            Phone.
                        </td>
                        <td class="text-right">
                            {!! GetAboutByKey('phone') !!}
                        </td>
                    </tr>

                    <tr>
                        <td class="bold secondary-color">
                            Fax.
                        </td>
                        <td class="text-right">
                            {!! GetAboutByKey('fax') !!}
                        </td>
                    </tr>

                    <tr>
                        <td class="bold secondary-color">
                            Email.
                        </td>
                        <td class="text-right">
                            {!! GetAboutByKey('email') !!}
                        </td>
                    </tr>

                    <tr>
                        <td class="bold secondary-color">
                            Website.
                        </td>
                        <td class="text-right">
                            {!! GetAboutByKey('website') !!}
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-md-4">
                <h2 class="head-title">Subscribe</h2>


                <form>
                    <div class="form-group input-group">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <span class="input-group-btn">
                            <button class="btn secondary-btn inline ladda-button" data-style="zoom-in" type="submit">KIRIM</button>
                       </span>
                    </div>
                </form>



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