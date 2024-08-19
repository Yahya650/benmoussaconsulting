<footer class="py-11 bg-primary position-relative" data-bg-img="/assets/v2/images/bg/03.png">
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
                    <form id="footer-form" class="group">
                        <input type="tel" value="" name="phone_number-footer-form" class="form-control"
                            id="mc-email" placeholder="{{ __('footer.part_4.form.placeholder') }}"
                            style="height: 60px;">
                        <span class="text text-white" id="phone_number-footer-form-error"></span>
                        <button type="submit" id="footer-form-btn-submit"
                            class="btn btn-outline-light btn-block mt-3 mb-2">@lang('footer.part_4.form.button')</button>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#footer-form').on('submit', function(e) {
            e.preventDefault();

            const form = $(this);
            const submitButton = $('#footer-form-btn-submit');

            if (!$('input[name=phone_number-footer-form]').val()) {
                $('input[name=phone_number-footer-form]').addClass('is-invalid');
                $('#phone_number-footer-form-error').text(
                    "{{ __('footer.part_4.form.error_1') }}");
                return;
            } else {
                $('input[name=phone_number-footer-form]').removeClass('is-invalid');
                $('#phone_number-footer-form-error').text("");
            }

            if ($('input[name=phone_number-footer-form]').val().length != 10 || !/^\d+$/.test($(
                    'input[name=phone_number-footer-form]').val())) {
                $('input[name=phone_number-footer-form]').addClass('is-invalid');
                $('#phone_number-footer-form-error').text(
                    "{{ __('footer.part_4.form.error_2') }}");
                return;
            } else {
                $('input[name=phone_number-footer-form]').removeClass('is-invalid');
                $('#phone_number-footer-form-error').text("");
            }

            submitButton.html(`
                    <i class="fa fa-spinner fa-pulse"></i>
                    `).css("cursor", "not-allowed").attr("disabled", true);

            $.ajax({
                type: "POST",
                url: "{{ route('leads.store') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    // full_name: $('input[name=full_name]').val(),
                    phone_number: $('input[name=phone_number-footer-form]').val(),
                },
                success: function(response) {
                    submitButton.html("{{ __('footer.part_4.form.button') }}").attr(
                        "disabled", false).css(
                        "cursor",
                        "pointer");
                    Swal.fire({
                        icon: "success",
                        title: "{{ __('footer.part_4.form.success') }}",
                        html: "{{ __('footer.part_4.form.success_text') }}",
                    });
                },
                error: function(res, status, error) {
                    submitButton.text("{{ __('footer.part_4.form.button') }}").attr(
                        "disabled", false).css(
                        "cursor",
                        "pointer");
                    Swal.fire({
                        icon: "error",
                        title: "{{ __('footer.part_4.form.error') }}",
                        html: res.responseJSON.message,
                    });
                }
            });
        });
    });
</script>
