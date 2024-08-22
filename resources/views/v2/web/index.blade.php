@extends('v2.web.layouts.default')

@section('seo')
    {!! seo($seoData) !!}
    <meta name="keywords"
        content="benmoussa consulting, Mohamed BenMoussa, Formateur international, Coach certifié, Comportements relationnels, Développement humain, Améliorer les relations, Éducation sexuelle, Coaching en relations, Conseils relationnels, Stratégies pratiques, Vie épanouissante, Développement personnel, État d'esprit positif,Relations intimes, Vie équilibrée, Coaching personnalisé, Cours de développement personnel, Radio coaching, Épanouissement personnel, Relations significatives, Relever des défis, Obstacles, Gérer les émotions, Conflits de couple, Divorce, Perte d'emploi, Problèmes comportementaux, Prendre la parole sans stresser, Aimer et vous faire aimer, Dire non, Devenir moins naïf, Gérer les émotions
Gérer les conflits de couple, Gérer les relations professionnelles et personnelles, Communiquer efficacement, Prendre des décisions, Gérer la pression de la société sur votre style de vie, Gérer une perte d'emploi, Séparation ou  Divorce, Souffrance émotionnelle, Infidélité
">
    <meta property="og:description"
        content="Mohamed BenMoussa est bien plus qu'un coach ordinaire. Avec des années d'expérience et une compréhension profonde des complexités de la vie moderne, il offre des conseils perspicaces et des stratégies pratiques pour aider les individus à surmonter les obstacles, à développer un état d'esprit positif et à établir des relations significatives et épanouissantes">
@endsection

@section('title', 'Accueil')
@section('content')

    <!--hero section start-->

    <section class="custom-pt-1 custom-pb-2 bg-primary parallaxie position-relative"
        style="background-image: url(/assets/v2/images/bg/01.jpg);background-position: center center; background-size: auto; background-repeat: no-repeat;"
        data-overlay="6">
        <div class="container" @if (app()->getLocale() == 'ar') @class(['mt-3']) @endif>
            <div class="row justify-content-center text-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <!-- Heading -->
                    <h1 class="display-4 text-white fw-bold">
                        @lang('home.hero.title')
                    </h1>
                    <!-- Text -->
                    <p class="lead text-light">
                        @lang('home.hero.subtitle')
                    </p>
                    <!-- Buttons -->
                    <a href="{{ route('lead_form', ['lang' => session()->get('lang')]) }}" class="btn btn-primary me-1">
                        @lang('home.hero.button')
                    </a>
                    {{-- <a href="#" class="btn btn-light">
                        Get Started
                    </a> --}}
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
        <div class="shape-1 bottom" style="height: 100px; overflow: hidden;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <polygon class="svg--sm" fill="white" points="0,0 30,100 65,21 90,100 100,75 100,100 0,100" />
                <polygon class="svg--lg" fill="white"
                    points="0,0 15,100 33,21 45,100 50,75 55,100 72,20 85,100 95,50 100,80 100,100 0,100" />
            </svg>
        </div>
    </section>

    <!--hero section end-->


    <!--body content start-->

    <div class="page-content">


        <section>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-12 col-md-12 col-lg-8 mb-8 mb-lg-0">
                        <div class="mb-8"> <span class="badge badge-primary-soft p-2 font-w-6">
                                @lang('home.section_1.title')
                            </span>
                            <h2 class="mt-3 font-w-5">@lang('home.section_1.subtitle')</h2>
                            {{-- <p class="lead mb-0">All types of businesses need access to development resources, so
                                we give you the
                                option to decide how much you need to use.</p> --}}
                        </div>
                    </div>
                </div>
                <!-- / .row -->
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3 mb-8 mb-lg-0">
                        <div class="px-4 py-7 rounded hover-translate text-center bg-white shadow">
                            <div class="position-relative">
                                <img class="img-fluid" src="/web/images/benmoussa-radio.jpg" alt="">
                                <div class="video-btn video-btn-pos"> <a class="play-btn popup-youtube"
                                        href="https://www.youtube.com/watch?v=H9QqaVrSDK0"><i class="fa-brands fa-youtube"
                                            style="color: #ff0000;"></i></a>
                                    <div class="spinner-eff">
                                        <div class="spinner-circle circle-1"></div>
                                        <div class="spinner-circle circle-2"></div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mt-4 mb-3">@lang('home.section_1.cards.card_1.title')</h5>
                            {{-- <p>Serspiciatis unde omnis iste natus error sit doloremque laudantium, totam rem
                                aperiam.</p> --}}
                            <a class="btn-link link-underline link-underline-opacity-0"
                                href="https://www.youtube.com/watch?v=H9QqaVrSDK0" target="_blank">@lang('home.section_1.cards.card_1.button')</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="px-4 py-7 rounded hover-translate text-center bg-white shadow">
                            <div class="position-relative">
                                <img class="img-fluid" src="/web/images/coach-chada-3.jpg" alt="">
                                <div class="video-btn video-btn-pos"> <a class="play-btn popup-youtube"
                                        href="https://www.youtube.com/watch?v=iwcf3gv_Zc4"><i class="fa-brands fa-youtube"
                                            style="color: #ff0000;"></i></a>
                                    <div class="spinner-eff">
                                        <div class="spinner-circle circle-1"></div>
                                        <div class="spinner-circle circle-2"></div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mt-4 mb-3">@lang('home.section_1.cards.card_2.title')</h5>
                            {{-- <p>Serspiciatis unde omnis iste natus error sit doloremque laudantium, totam rem
                                aperiam.</p> --}}
                            <a class="btn-link link-underline link-underline-opacity-0"
                                href="https://www.youtube.com/watch?v=iwcf3gv_Zc4" target="_blank">@lang('home.section_1.cards.card_2.button')</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6 mt-6 mt-sm-0">
                        <div class="px-4 py-7 rounded hover-translate text-center bg-white shadow">
                            <div class="position-relative">
                                <img class="img-fluid" src="/web/images/coach-chada-1.png" alt="">
                                <div class="video-btn video-btn-pos"> <a class="play-btn popup-youtube"
                                        href="https://www.youtube.com/watch?v=0pKUSbq3SS0"><i class="fa-brands fa-youtube"
                                            style="color: #ff0000;"></i></a>
                                    <div class="spinner-eff">
                                        <div class="spinner-circle circle-1"></div>
                                        <div class="spinner-circle circle-2"></div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mt-4 mb-3">@lang('home.section_1.cards.card_3.title')</h5>
                            {{-- <p>Serspiciatis unde omnis iste natus error sit doloremque laudantium, totam rem
                                aperiam.</p> --}}
                            <a class="btn-link link-underline link-underline-opacity-0"
                                href="https://www.youtube.com/watch?v=0pKUSbq3SS0" target="_blank">@lang('home.section_1.cards.card_3.button')</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6 mt-6 mt-sm-0">
                        <div class="px-4 py-7 rounded hover-translate text-center bg-white shadow">
                            <div class="position-relative">
                                <img class="img-fluid" src="/web/images/coach-chada-6.jpg" alt="">
                                <div class="video-btn video-btn-pos"> <a class="play-btn popup-youtube"
                                        href="https://www.youtube.com/watch?v=ACmDMOg-iK4">
                                        <i class="fa-brands fa-youtube" style="color: #ff0000;"></i>
                                    </a>
                                    <div class="spinner-eff">
                                        <div class="spinner-circle circle-1"></div>
                                        <div class="spinner-circle circle-2"></div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mt-4 mb-3">@lang('home.section_1.cards.card_4.title')</h5>
                            {{-- <p>Serspiciatis unde omnis iste natus error sit doloremque laudantium, totam rem
                                aperiam.</p> --}}
                            <a class="btn-link link-underline link-underline-opacity-0"
                                href="https://www.youtube.com/watch?v=ACmDMOg-iK4" target="_blank">@lang('home.section_1.cards.card_4.button')</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="custom-pt-1 custom-pb-2 bg-dark position-relative"
            style="background-image: url(&quot;/assets/v2/images/bg/02.png&quot;);">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-4 col-md-6 mb-8 mb-lg-0 text-white">
                        <div> <span class="badge badge-primary-soft p-2">
                                <i class="la la-cubes ic-3x rotation"></i>
                            </span>
                            <h2 class="mt-3 mb-0">@lang('home.section_2.title')</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="bg-primary-soft rounded p-5">
                            <div class="d-flex align-items-center mb-4">
                                <div class="me-3">
                                    <img class="img-fluid" src="/assets/v2/images/icon/01.svg" alt="">
                                </div>
                                <h5 class="m-0 text-light">@lang('home.section_2.services.service_1.title')</h5>
                            </div>
                            <p class="mb-0">@lang('home.section_2.services.service_1.description')</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-6 mt-md-0">
                        <div class="bg-primary-soft rounded p-5">
                            <div class="d-flex align-items-center mb-4">
                                <div class="me-3">
                                    <img class="img-fluid" src="/assets/v2/images/icon/02.svg" alt="">
                                </div>
                                <h5 class="m-0 text-light">@lang('home.section_2.services.service_2.title')</h5>
                            </div>
                            <p class="mb-0">@lang('home.section_2.services.service_2.description')</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-6">
                        <div class="bg-primary-soft rounded p-5">
                            <div class="d-flex align-items-center mb-4">
                                <div class="me-3">
                                    <img class="img-fluid" src="/assets/v2/images/icon/03.svg" alt="">
                                </div>
                                <h5 class="m-0 text-light">@lang('home.section_2.services.service_3.title')</h5>
                            </div>
                            <p class="mb-0">@lang('home.section_2.services.service_3.description')</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-6">
                        <div class="bg-primary-soft rounded p-5">
                            <div class="d-flex align-items-center mb-4">
                                <div class="me-3">
                                    <img class="img-fluid" src="/assets/v2/images/icon/04.svg" alt="">
                                </div>
                                <h5 class="m-0 text-light">@lang('home.section_2.services.service_4.title')</h5>
                            </div>
                            <p class="mb-0">@lang('home.section_2.services.service_4.description')</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-6">
                        <div class="bg-primary-soft rounded p-5">
                            <div class="d-flex align-items-center mb-4">
                                <div class="me-3">
                                    <img class="img-fluid" src="/assets/v2/images/icon/05.svg" alt="">
                                </div>
                                <h5 class="m-0 text-light">@lang('home.section_2.services.service_5.title')</h5>
                            </div>
                            <p class="mb-0">@lang('home.section_2.services.service_5.description')</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-1" style="height: 150px; overflow: hidden;">
                <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M0.00,49.98 C150.00,150.00 271.49,-50.00 500.00,49.98 L500.00,0.00 L0.00,0.00 Z"
                        style="stroke: none; fill: #fff;"></path>
                </svg>
            </div>
            <div class="shape-1 bottom" style="height: 200px; overflow: hidden;">
                <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                        style="stroke: none; fill: #fff;"></path>
                </svg>
            </div>
        </section>




        <section style="padding-top: 10px;">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-lg-6 mb-6 mb-lg-0">
                        <img src="/assets/v2/images/about/03.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5">
                        <div> <span class="badge badge-primary-soft p-2">
                                <i class="la la-exclamation ic-3x rotation"></i>
                            </span>
                            <h2 class="mt-3">@lang('home.section_4.title')</h2>
                            <p class="lead">@lang('home.section_4.descreption')</p>
                        </div>
                        {{-- <div class="d-flex flex-wrap justify-content-start">
                            <div class="mb-3 me-4">
                                <div class="d-flex align-items-center">
                                    <div class="badge-primary-soft rounded p-1">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-check">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg>
                                    </div>
                                    <p class="mb-0 ms-3">Fully Responsive</p>
                                </div>
                            </div>
                            <div class="mb-3 me-4">
                                <div class="d-flex align-items-center">
                                    <div class="badge-primary-soft rounded p-1">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-check">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg>
                                    </div>
                                    <p class="mb-0 ms-3">Based On Bootstrap 4</p>
                                </div>
                            </div>
                            <div class="mb-3 me-4">
                                <div class="d-flex align-items-center">
                                    <div class="badge-primary-soft rounded p-1">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-check">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg>
                                    </div>
                                    <p class="mb-0 ms-3">Built with Sass</p>
                                </div>
                            </div>
                            <div class="mb-3 me-4">
                                <div class="d-flex align-items-center">
                                    <div class="badge-primary-soft rounded p-1">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-check">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg>
                                    </div>
                                    <p class="mb-0 ms-3">SVG Icon</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-outline-primary mt-5">
                            Learn More
                        </a> --}}
                    </div>
                </div>
            </div>
        </section>




    </div>

    <!--body content end-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#accuill-form').on('submit', function(e) {
                e.preventDefault();

                const form = $(this);
                const submitButton = $('#accuill-form-btn-submit');

                if (!$('input[name=phone_number-accuill-form]').val() || !/^\d+$/.test($(
                        'input[name=phone_number-accuill-form]').val())) {
                    $('input[name=phone_number-accuill-form]').addClass('is-invalid');
                    $('#phone_number-accuill-form-error').text(
                        "SVP, veuillez entrer votre numéro de telephone");
                    return;
                } else {
                    $('input[name=phone_number-accuill-form]').removeClass('is-invalid');
                    $('#phone_number-accuill-form-error').text("");
                }

                if ($('input[name=phone_number-accuill-form]').val().length != 10 || !/^\d+$/.test($(
                        'input[name=phone_number-accuill-form]').val())) {
                    $('input[name=phone_number-accuill-form]').addClass('is-invalid');
                    $('#phone_number-accuill-form-error').text(
                        "SVP, veuillez entrer un numéro de telephone valide");
                    return;
                } else {
                    $('input[name=phone_number-accuill-form]').removeClass('is-invalid');
                    $('#phone_number-accuill-form-error').text("");
                }

                submitButton.html(`
                    <i class="fa fa-spinner fa-pulse"></i>
                    `).css("cursor", "not-allowed").attr("disabled", true);

                $.ajax({
                    type: "POST",
                    url: "{{ route('leads.store', ['lang' => session()->get('lang')]) }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        // full_name: $('input[name=full_name]').val(),
                        phone_number: $('input[name=phone_number-accuill-form]').val(),
                    },
                    success: function(response) {
                        submitButton.html("Prendre Rendez-Vous").attr("disabled", false).css(
                            "cursor",
                            "pointer");
                        Swal.fire({
                            icon: "success",
                            title: "Félicitation",
                            html: "Votre numero de telephone a été envoyé avec succès.",
                        });
                    },
                    error: function(res, status, error) {
                        submitButton.text("Prendre Rendez-Vous").attr("disabled", false).css(
                            "cursor",
                            "pointer");
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            html: res.responseJSON.message,
                        });
                    }
                });
            });
        });
    </script>

@endsection
