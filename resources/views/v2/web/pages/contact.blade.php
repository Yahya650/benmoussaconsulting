@extends('v2.web.layouts.default')


@section('seo')
    {!! seo($seoData) !!}
    <meta name="keywords"
        content="benmoussa consulting, Mohamed BenMoussa, Formateur international, Coach certifié, Comportements relationnels, Développement humain, Améliorer les relations, Éducation sexuelle, Coaching en relations, Conseils relationnels, Stratégies pratiques, Vie épanouissante, Développement personnel, État d'esprit positif,Relations intimes, Vie équilibrée, Coaching personnalisé, Cours de développement personnel, Radio coaching, Épanouissement personnel, Relations significatives, Relever des défis, Obstacles, Gérer les émotions, Conflits de couple, Divorce, Perte d'emploi, Problèmes comportementaux, Prendre la parole sans stresser, Aimer et vous faire aimer, Dire non, Devenir moins naïf, Gérer les émotions
Gérer les conflits de couple, Gérer les relations professionnelles et personnelles, Communiquer efficacement, Prendre des décisions, Gérer la pression de la société sur votre style de vie, Gérer une perte d'emploi, Séparation ou  Divorce, Souffrance émotionnelle, Infidélité
">
    <meta property="og:description"
        content="Mohamed BenMoussa est bien plus qu'un coach ordinaire. Avec des années d'expérience et une compréhension profonde des complexités de la vie moderne, il offre des conseils perspicaces et des stratégies pratiques pour aider les individus à surmonter les obstacles, à développer un état d'esprit positif et à établir des relations significatives et épanouissantes.">

@endsection

@section('title', 'Contactez-nous')
@section('content')

    <section class="position-relative">
        <div id="particles-js"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1898"
                height="315"></canvas></div>
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1>@lang('contact.section_1.title')</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
                            <li class="breadcrumb-item"><a class="text-dark"
                                    href="{{ route('web.home', ['lang' => session()->get('lang')]) }}">@lang('contact.section_1.breadcrumbs.home')</a>
                            </li>
                            {{-- <li class="breadcrumb-item">@lang('contact.section_1.breadcrumbs.pages')</li> --}}
                            {{-- <li class="breadcrumb-item">@lang('contact.section_1.breadcrumbs.contacts')</li> --}}
                            <li class="breadcrumb-item active text-primary" aria-current="page">@lang('contact.section_1.breadcrumbs.contact_us')</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <div class="page-content">
        <section>
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-4 col-md-12">
                        <div>
                            <h4 class="mt-5">@lang('contact.section_2.address.title')</h4>
                            <span class="text-dark">@lang('contact.section_2.address.details')</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div>
                            <h4 class="mt-5">@lang('contact.section_2.email.title')</h4>
                            <a href="mailto:contact@benmoussaconsulting.com">contact@benmoussaconsulting.com</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div>
                            <h4 class="mt-5">@lang('contact.section_2.phone.title')</h4>
                            <a href="tel:+912345678900">0520-816447</a>
                            /
                            <a href="tel:+912345678900">0665-228542</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row justify-content-center mb-5 text-center">
                    <div class="col-12 col-lg-8">
                        <div>
                            <h2 class="mt-4 mb-0">@lang('contact.section_3.title')</h2>
                            <p class="lead mb-0">@lang('contact.section_3.subtitle')</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-12 col-lg-10">
                        <form id="contact-form" class="row" data-waitbutton="#submit" novalidate="true"
                            action="{{ route('send.message', ['lang' => session()->get('lang')]) }}" method="POST">
                            @csrf
                            <div class="messages"></div>
                            <div class="form-group col-md-6">
                                <input id="form_name" type="text" name="first_name" class="form-control"
                                    placeholder="@lang('contact.section_4.form.first_name_placeholder')" required="required" data-error="@lang('contact.section_4.form.first_name_error')">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input id="form_name1" type="text" name="last_name" class="form-control"
                                    placeholder="@lang('contact.section_4.form.last_name_placeholder')" required="required" data-error="@lang('contact.section_4.form.last_name_error')">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input id="form_email" type="email" name="email" class="form-control"
                                    placeholder="@lang('contact.section_4.form.email_placeholder')" required="required" data-error="@lang('contact.section_4.form.email_error')">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input id="form_phone" type="tel" name="phone_number" class="form-control"
                                    placeholder="@lang('contact.section_4.form.phone_placeholder')" required="required" data-error="@lang('contact.section_4.form.phone_error')">
                                <div class="help-block with-errors"></div>
                            </div>
                            {{-- <div class="form-group col-md-6">
                                <select class="form-select form-control">
                                    <option>@lang('contact.section_4.form.select_service')</option>
                                    <option>@lang('contact.section_4.form.service_1')</option>
                                    <option>@lang('contact.section_4.form.service_2')</option>
                                    <option>@lang('contact.section_4.form.service_3')</option>
                                    <option>@lang('contact.section_4.form.service_4')</option>
                                    <option>@lang('contact.section_4.form.service_5')</option>
                                </select>
                            </div> --}}
                            <div class="form-group col-md-12">
                                <input id="form_subject" type="text" name="subject" class="form-control"
                                    placeholder="@lang('contact.section_4.form.subject_placeholder')" required="required" data-error="@lang('contact.section_4.form.subject_error')">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea id="form_message" name="message" class="form-control" placeholder="@lang('contact.section_4.form.message_placeholder')" rows="10"
                                    required="required" data-error="@lang('contact.section_4.form.message_error')"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 text-center mt-4">
                                <button class="btn btn-primary" id="submit"><span>@lang('contact.section_4.form.submit_button')</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // $(document).ready(function() {
        //     $('#contact-form').on('submit', function(e) {
        //         e.preventDefault();

        //         const form = $(this);
        //         const submitButton = $('#submit');

        //         submitButton.html(`<i class="fa fa-spinner fa-pulse"></i>`)
        //             .css("cursor", "not-allowed")
        //             .attr("disabled", true);

        //         $.ajax({
        //             type: "POST",
        //             url: "{{ route('send.message', ['lang' => session()->get('lang')]) }}",
        //             data: {
        //                 _token: "{{ csrf_token() }}",
        //                 first_name: $('input[name=first_name]').val(),
        //                 last_name: $('input[name=last_name]').val(),
        //                 email: $('input[name=email]').val(),
        //                 phone_number: $('input[name=phone_number]').val(),
        //                 subject: $('input[name=subject]').val(),
        //                 text: $('#form_message').val(),
        //             },
        //             success: function(response) {
        //                 submitButton.html(`
    //                 <i class="fa fa-paper-plane"></i>
    //             `).attr("disabled", false).css("cursor",
        //                     "pointer");

        // Swal.fire({
        //     icon: "success",
        //     title: "{{ __('footer.part_4.form.success') }}",
        //     html: response.message,
        // });
        //             },
        //             error: function(res, status, error) {
        //                 submitButton.text("Envoyer").attr("disabled", false).css("cursor",
        //                     "pointer");
        //                 Swal.fire({
        //                     icon: "error",
        //                     title: "{{ __('footer.part_4.form.error') }}",
        //                     html: res.responseJSON.message,
        //                 });
        //             }
        //         });
        //     });
        // });
    </script>

@endsection
