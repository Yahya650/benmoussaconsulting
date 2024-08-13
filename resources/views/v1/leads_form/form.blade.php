@extends('v1.leads_form.layouts.default')

@section('seo')
    {!! seo($seoData) !!}
    <meta name="keywords"
        content="benmoussa consulting, Mohamed BenMoussa, Formateur international, Coach certifié, Comportements relationnels, Développement humain, Améliorer les relations, Éducation sexuelle, Coaching en relations, Conseils relationnels, Stratégies pratiques, Vie épanouissante, Développement personnel, État d'esprit positif,Relations intimes, Vie équilibrée, Coaching personnalisé, Cours de développement personnel, Radio coaching, Épanouissement personnel, Relations significatives">
    <meta property="og:description"
        content="Mohamed BenMoussa est bien plus qu'un coach ordinaire. Avec des années d'expérience et une compréhension profonde des complexités de la vie moderne, il offre des conseils perspicaces et des stratégies pratiques pour aider les individus à surmonter les obstacles, à développer un état d'esprit positif et à établir des relations significatives et épanouissantes.">

@endsection


@section('title', 'Prendre Rendez-Vous')


@section('content')
    <section class="fxt-template-animation fxt-template-layout30 ">
        <!-- Star Animation Start Here -->
        <canvas id="canvas"></canvas>
        <!-- Star Animation End Here -->
        <div class="fxt-content rounded">
            <div class="fxt-header">
                <a href="login-30.html" class="fxt-logo"><img src="/assets/leads_form/img/output-onlinegiftools.gif"
                        alt="Logo"></a>
            </div>
            <div class="fxt-form">
                <p class="text-center">
                    المرجو ادخال المعلومات
                    <br>
                    Merci de remplir le formulaire
                </p>
                <form id="clientForm">

                    <input type="hidden" name="campaign_name" value="{{ request()->campaign_name }}">
                    <input type="hidden" name="adset_name" value="{{ request()->adset_name }}">
                    <input type="hidden" name="ad_name" value="{{ request()->ad_name }}">

                    <div class="form-group">
                        <div class="fxt-transformY-50 fxt-transition-delay-1">
                            <input type="text" class="form-control" name="full_name"
                                placeholder="الاسم الكامل / Nom complet">
                            <span id="full_name-error" class="text text-danger mt-2"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="fxt-transformY-50 fxt-transition-delay-1">
                            <input type="text" class="form-control" name="phone_number" placeholder="06*********">
                            <span id="phone_number-error" class="text text-danger mt-2"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="fxt-transformY-50 fxt-transition-delay-1">
                            <input type="text" class="form-control" name="phone_number_confirmation"
                                placeholder="تاكيد رقم الهاتف / Confirmer le numéro de téléphone">
                            <span id="phone_number_confirmation-error" class="text text-danger mt-2"></span>
                        </div>
                    </div>

                    {{-- <div class="form-group">
                        <div class="fxt-transformY-50 fxt-transition-delay-3">
                            <div class="fxt-checkbox-area">
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">Keep me logged in</label>
                                </div>
                                <a href="forgot-password-30.html" class="switcher-text">Forgot Password</a>
                            </div>
                        </div>
                    </div> --}}


                    <div class="form-group">
                        <div class="fxt-transformY-50 fxt-transition-delay-4 d-flex">
                            <button type="submit" id="submit" class="fxt-btn-fill mx-auto"
                                style="background-color: #168bf8">ارسال / Soumettre</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="fxt-style-line">
                <div class="fxt-transformY-50 fxt-transition-delay-5">
                    <h3 class="mb-3">Visitez nos réseaux sociaux</h3>
                </div>
            </div>
            <div class="fxt-style-line">
                <div class="fxt-transformY-50 fxt-transition-delay-5">
                    <h3>قم بزيارتنا على شبكات التواصل الاجتماعية</h3>
                </div>
            </div>

            <ul class="fxt-socials d-flex justify-content-center">
                <li class="">
                    <a href="https://www.instagram.com/mrbenmoussamohamed/" title="Instagram"
                        style="background-color: crimson;"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-6">
                    <a href="https://web.facebook.com/coachbenmoussa/" title="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                </li>
                <li class="">
                    <a href="https://www.tiktok.com/@mrmohamedbenmoussa/" title="TikTok" style="border: none; width: 41px">
                        <img src="/assets/leads_form/img/tiktok-logo-on-transparent-background-free-vector-removebg-preview1.png"
                            srcset="" width="150">
                    </a>
                </li>
            </ul>

            <div class="fxt-footer">
                <div class="fxt-transformY-50 fxt-transition-delay-9">
                    {{-- <p>
                        Don't have an account?<a href="register-30.html" class="switcher-text2 inline-text">Register</a>
                    </p> --}}
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#clientForm').on('submit', function(e) {
                e.preventDefault();

                const form = $(this);
                const submitButton = $('#submit');

                if (!$('input[name=full_name]').val()) {
                    $('input[name=full_name]').addClass('is-invalid');
                    $('#full_name-error').text("الرجاء ادخال الاسم الكامل");
                    return;
                } else {
                    $('input[name=full_name]').removeClass('is-invalid');
                    $('#full_name-error').text("");
                }

                if (!/^[A-Za-z\s]+$/.test($('input[name=full_name]').val())) {
                    $('input[name=full_name]').addClass('is-invalid');
                    $('#full_name-error').text(
                        "الاسم غير صحيح. يجب أن يحتوي فقط على أحرف أبجدية ومسافات.");
                    return;
                } else {
                    $('input[name=full_name]').removeClass('is-invalid');
                    $('#full_name-error').text("");
                }

                if (!$('input[name=phone_number]').val()) {
                    $('input[name=phone_number]').addClass('is-invalid');
                    $('#phone_number-error').text("الرجاء ادخال رقم الهاتف");
                    return;
                } else {
                    $('input[name=phone_number]').removeClass('is-invalid');
                    $('#phone_number-error').text("");
                }

                if ($('input[name=phone_number]').val().length != 10 || !/^\d+$/.test($(
                        'input[name=phone_number]').val())) {
                    $('input[name=phone_number]').addClass('is-invalid');
                    $('#phone_number-error').text("EX: 0600000000 الرجاء ادخال رقم هاتف صحيح");
                    return;
                } else {
                    $('input[name=phone_number]').removeClass('is-invalid');
                    $('#phone_number-error').text("");
                }

                if ($('input[name=phone_number_confirmation]').val() != $('input[name=phone_number]')
                    .val()) {
                    $('input[name=phone_number_confirmation]').addClass('is-invalid');
                    $('#phone_number_confirmation-error').text("الرجاء التأكد من رقم الهاتف");
                    return;
                } else {
                    $('input[name=phone_number_confirmation]').removeClass('is-invalid');
                    $('#phone_number_confirmation-error').text("");
                }

                submitButton.html(`
                
                <div class="spinner-border" role="status">
                                <span class="visually-hidden"></span>
                            </div>

                `).css("cursor", "not-allowed").attr("disabled", true);

                $.ajax({
                    type: "POST",
                    url: "{{ route('leads.store') }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        full_name: $('input[name=full_name]').val(),
                        phone_number: $('input[name=phone_number]').val(),
                        campaign_name: $('input[name=campaign_name]').val(),
                        adset_name: $('input[name=adset_name]').val(),
                        ad_name: $('input[name=ad_name]').val(),
                    },
                    success: function(response) {
                        submitButton.html(`
                        ارسال
                        `).attr("disabled", false).css("cursor",
                            "pointer");
                        window.location.href = response.redirect;
                    },
                    error: function(res, status, error) {
                        submitButton.text("ارسال").attr("disabled", false).css("cursor",
                            "pointer");
                        Swal.fire({
                            icon: "error",
                            title: "حدث خطأ...",
                            html: res.responseJSON.message,
                        });
                    }
                });
            });
        });
    </script>
@endsection
