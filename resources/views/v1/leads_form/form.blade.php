@extends('v1.leads_form.layouts.default')

@section('seo')
    {!! seo($seoData) !!}
    <meta name="keywords"
        content="benmoussa consulting, Mohamed BenMoussa, Formateur international, Coach certifié, Comportements relationnels, Développement humain, Améliorer les relations, Éducation sexuelle, Coaching en relations, Conseils relationnels, Stratégies pratiques, Vie épanouissante, Développement personnel, État d'esprit positif,Relations intimes, Vie équilibrée, Coaching personnalisé, Cours de développement personnel, Radio coaching, Épanouissement personnel, Relations significatives, Relever des défis, Obstacles, Gérer les émotions, Conflits de couple, Divorce, Perte d'emploi, Problèmes comportementaux, Prendre la parole sans stresser, Aimer et vous faire aimer, Dire non, Devenir moins naïf, Gérer les émotions
Gérer les conflits de couple, Gérer les relations professionnelles et personnelles, Communiquer efficacement, Prendre des décisions, Gérer la pression de la société sur votre style de vie, Gérer une perte d'emploi, Séparation ou  Divorce, Souffrance émotionnelle, Infidélité
">
    <meta property="og:description"
        content="Mohamed BenMoussa est bien plus qu'un coach ordinaire. Avec des années d'expérience et une compréhension profonde des complexités de la vie moderne, il offre des conseils perspicaces et des stratégies pratiques pour aider les individus à surmonter les obstacles, à développer un état d'esprit positif et à établir des relations significatives et épanouissantes.">
@endsection


@section('title', 'Prendre Rendez-Vous')


@section('content')
    <section class="fxt-template-animation fxt-template-layout30 ">
        <!-- Star Animation Start Here -->
        <canvas id="canvas"></canvas>
        <!-- Star Animation End Here -->
        <div class="fxt-content rounded position-relative">
            <div class="position-absolute top-0 start-0 mt-3 ms-3">
                <a href="{{ route('web.home', ['lang' => session()->get('lang')]) }}">
                    <i class="fa-solid fa-arrow-left fa-beat-fade fa-2xl" style="color: #000000;"></i>
                </a>
            </div>
            <div class="position-absolute top-0 end-0 mt-3 me-3">
                <a href="{{ route('lead_form.change_lang', ['lang' => app()->getLocale() == 'ar' ? 'fr' : 'ar']) }}"
                    class="btn btn-primary">
                    @if (app()->getLocale() == 'ar')
                        fr
                    @else
                        ar
                    @endif
                </a>
            </div>

            <div class="fxt-header">
                <a href="{{ route('web.home', ['lang' => session()->get('lang')]) }}" class="fxt-logo">
                    <img src="/assets/leads_form/img/output-onlinegiftools.gif" alt="Logo">
                </a>
            </div>
            <div class="fxt-form">
                <p class="text-center">
                    {{ __('lead_form.enter_info') }}
                    <br>
                    {{-- {{ __('lead_form.enter_info') }} --}}
                </p>
                <form id="clientForm">

                    <input type="hidden" name="campaign_name" value="{{ request()->campaign_name }}">
                    <input type="hidden" name="adset_name" value="{{ request()->adset_name }}">
                    <input type="hidden" name="ad_name" value="{{ request()->ad_name }}">

                    <div class="form-group">
                        <div class="fxt-transformY-50 fxt-transition-delay-1">
                            <input type="text" class="form-control" name="full_name"
                                placeholder="{{ __('lead_form.full_name') }}">
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
                                placeholder="{{ __('lead_form.phone_number_confirmation') }}">
                            <span id="phone_number_confirmation-error" class="text text-danger mt-2"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="fxt-transformY-50 fxt-transition-delay-4 d-flex">
                            <button type="submit" id="submit" class="fxt-btn-fill mx-auto"
                                style="background-color: #168bf8">{{ __('lead_form.submit') }}</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="fxt-style-line">
                <div class="fxt-transformY-50 fxt-transition-delay-5">
                    <h3 class="mb-3">{{ __('lead_form.visit_us') }}</h3>
                </div>
            </div>
            {{-- <div class="fxt-style-line">
                <div class="fxt-transformY-50 fxt-transition-delay-5">
                    <h3>{{ __('lead_form.social_media') }}</h3>
                </div>
            </div> --}}

            <ul class="fxt-socials d-flex justify-content-center">
                <li class="mx-0 px-0">
                    <a href="https://www.instagram.com/mrbenmoussamohamed/" title="{{ __('lead_form.instagram') }}"
                        style="background-color: crimson;"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-6 mx-2">
                    <a href="https://web.facebook.com/coachbenmoussa/" title="{{ __('lead_form.facebook') }}"><i
                            class="fab fa-facebook-f"></i></a>
                </li>
                <li class="mx-0 px-0">
                    <a href="https://www.tiktok.com/@mrmohamedbenmoussa/" title="{{ __('lead_form.tiktok') }}"
                        style="border: none; width: 41px">
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

                const fullName = $('input[name=full_name]').val();
                const phoneNumber = $('input[name=phone_number]').val();
                const phoneNumberConfirmation = $('input[name=phone_number_confirmation]').val();

                const errors = {
                    full_name: '',
                    phone_number: '',
                    phone_number_confirmation: ''
                };

                if (!fullName) {
                    errors.full_name =
                        "{{ __('lead_form.validation.required', ['attribute' => __('lead_form.validation.full_name')]) }}";
                } else if (!/^[A-Za-z\s]+$/.test(fullName)) {
                    errors.full_name = "{{ __('lead_form.validation.alpha') }}";
                }

                if (!phoneNumber) {
                    errors.phone_number =
                        "{{ __('lead_form.validation.required', ['attribute' => __('lead_form.validation.phone_number')]) }}";
                } else if (phoneNumber.length != 10 || !/^\d+$/.test(phoneNumber)) {
                    errors.phone_number = "{{ __('lead_form.validation.digits') }}";
                }

                if (phoneNumberConfirmation !== phoneNumber) {
                    errors.phone_number_confirmation = "{{ __('lead_form.validation.confirmed') }}";
                }

                $('input[name=full_name]').toggleClass('is-invalid', !!errors.full_name);
                $('#full_name-error').text(errors.full_name);

                $('input[name=phone_number]').toggleClass('is-invalid', !!errors.phone_number);
                $('#phone_number-error').text(errors.phone_number);

                $('input[name=phone_number_confirmation]').toggleClass('is-invalid', !!errors
                    .phone_number_confirmation);
                $('#phone_number_confirmation-error').text(errors.phone_number_confirmation);

                if (Object.values(errors).some(error => error)) {
                    return;
                }

                submitButton.html(`
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden"></span>
                    </div>
                `).css("cursor", "not-allowed").attr("disabled", true);

                $.ajax({
                    type: "POST",
                    url: "{{ route('leads.store', ['lang' => session()->get('lang')]) }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        full_name: fullName,
                        phone_number: phoneNumber,
                        campaign_name: $('input[name=campaign_name]').val(),
                        adset_name: $('input[name=adset_name]').val(),
                        ad_name: $('input[name=ad_name]').val(),
                    },
                    success: function(response) {
                        submitButton.html(`{{ __('lead_form.validation.submit') }}`).attr(
                            "disabled",
                            false).css("cursor", "pointer");
                        window.location.href = response.redirect;
                    },
                    error: function(res, status, error) {
                        submitButton.text("{{ __('lead_form.validation.submit') }}").attr(
                            "disabled",
                            false).css("cursor", "pointer");
                        Swal.fire({
                            icon: "error",
                            title: "{{ __('lead_form.validation.error_title') }}",
                            html: res.responseJSON.message,
                        });
                    }
                });
            });
        });
    </script>

@endsection
