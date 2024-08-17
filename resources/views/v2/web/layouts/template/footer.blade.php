<footer class="py-11 bg-primary position-relative" data-bg-img="assets/images/bg/03.png">
    <div class="shape-1" style="height: 150px; overflow: hidden;">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C150.00,150.00 271.49,-50.00 500.00,49.98 L500.00,0.00 L0.00,0.00 Z"
                style="stroke: none; fill: #fff;"></path>
        </svg>
    </div>
    <div class="container mt-7">
        <div class="row">

            <div class="col-12 col-lg-8 col-xl-8">
                <div class="row">
                    <div class="col-12 col-sm-6 mt-6 mt-sm-0 navbar-dark">
                        <h5 class="mb-4 text-white">
                            <a class="footer-logo text-white h2 mb-0" href="{{ route('web.home') }}">
                                M.Ben<span class="fw-bold">Moussa</span>
                            </a>
                        </h5>
                        <ul class="navbar-nav list-unstyled mb-0 text-white">
                            @lang('footer.part_1.descreption')
                        </ul>
                    </div>
                    <div class="col-12 col-sm-3 navbar-dark">
                        <h5 class="mb-4 text-white">@lang('footer.part_2.title')</h5>
                        <ul class="navbar-nav list-unstyled mb-0">
                            <li class="mb-3 nav-item">
                                <a class="nav-link" href="{{ route('web.home') }}">@lang('footer.part_2.home')</a>
                            </li>
                            <li class="mb-3 nav-item">
                                <a class="nav-link" href="{{ route('lead_form') }}">@lang('footer.part_2.take_appointment')</a>
                            </li>
                            <li class="mb-3 nav-item">
                                <a class="nav-link" href="{{ route('web.contact') }}">@lang('footer.part_2.contact')</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-3 mt-6 mt-sm-0 navbar-dark">
                        <h5 class="mb-4 text-white">@lang('footer.part_3.title')</h5>
                        <ul class="navbar-nav list-unstyled mb-0">
                            <li class="mb-3 nav-item">
                                <a class="nav-link" style="cursor: pointer;">@lang('footer.part_3.service_1')</a>
                            </li>
                            <li class="mb-3 nav-item">
                                <a class="nav-link" style="cursor: pointer;">@lang('footer.part_3.service_2')</a>
                            </li>
                            <li class="mb-3 nav-item">
                                <a class="nav-link" style="cursor: pointer;">@lang('footer.part_3.service_3')</a>
                            </li>
                            <li class="mb-3 nav-item">
                                <a class="nav-link" style="cursor: pointer;">@lang('footer.part_3.service_4')</a>
                            </li>
                            <li class="mb-3 nav-item">
                                <a class="nav-link" style="cursor: pointer;">@lang('footer.part_3.service_5')</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-5">
                    {{-- <div class="col-12 col-sm-6">
                        <a class="footer-logo text-white h2 mb-0" href="index.html">
                            M.Ben<span class="fw-bold">Moussa</span>
                        </a>
                    </div> --}}

                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-4 me-auto mb-6 mb-lg-0">
                <div class="subscribe-form bg-warning-soft p-5 rounded">
                    <h5 class="mb-4 text-white">@lang('footer.part_4.title')</h5>
                    {{-- <h6 class="text-light">Nous vous appellerons</h6> --}}
                    <form id="mc-form" class="group">
                        <input type="text" value="" name="phone_number" class="email form-control"
                            id="mc-email" placeholder="{{ __('footer.part_4.form.placeholder') }}" required=""
                            style="height: 60px;">
                        <input class="btn btn-outline-light btn-block mt-3 mb-2" type="submit" name="subscribe"
                            value="{{ __('footer.part_4.form.button') }}">
                        {{-- </form> <small class="text-light">Get started for 1 Month free trial No Purchace
                        required.</small> --}}
                </div>
                <div class="col-12 col-sm-6 mt-6 mt-sm-0">
                    <ul class="list-inline mb-0 d-flex gap-3">
                        <li class="list-inline-item">
                            <a class="text-light ic-2x" href="https://web.facebook.com/coachbenmoussa/">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-light ic-2x" href="tel:+212520816447">
                                <i class="fa-solid fa-phone-volume"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-light ic-2x" href="https://www.tiktok.com/@mrbenmoussamohamed/">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-light ic-2x" href="https://wa.me/212665228542">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-light ic-2x" href="https://www.instagram.com/mrbenmoussamohamed/">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- <div class="row text-white text-center mt-8">
            <div class="col">
                <hr class="mb-8">Copyright 2019 Bootsland Theme by <u><a class="text-white"
                        href="#">ThemeHt</a></u> | All
                Rights Reserved
            </div>
        </div> --}}
    </div>
</footer>
