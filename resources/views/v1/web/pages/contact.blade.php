@extends('v1.web.layouts.default')


@section('seo')
    {!! seo($seoData) !!}
    <meta name="keywords"
        content="Mohamed BenMoussa, Formateur international, Coach certifié, Comportements relationnels, Développement humain, Améliorer les relations, Éducation sexuelle, Coaching en relations, Conseils relationnels, Stratégies pratiques, Vie épanouissante, Développement personnel, État d'esprit positif,Relations intimes, Vie équilibrée, Coaching personnalisé, Cours de développement personnel, Radio coaching, Épanouissement personnel, Relations significatives">
    <meta property="og:description"
        content="Mohamed BenMoussa est bien plus qu'un coach ordinaire. Avec des années d'expérience et une compréhension profonde des complexités de la vie moderne, il offre des conseils perspicaces et des stratégies pratiques pour aider les individus à surmonter les obstacles, à développer un état d'esprit positif et à établir des relations significatives et épanouissantes.">

@endsection

@section('title', 'Contactez-nous')
@section('content')

    <!-- Page Title Section -->
    <section class="page-title" style="background-image: url(/web/images/main-slider/image-1.png)">
        <div class="auto-container">
            <div class="content">
                <div class="text">Prenez contact avec :</div>
                <h1>Mohamed BenMoussa</h1>
            </div>
            <div class="breadcrumb-outer">
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('web.home') }}">Accueil</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title Section -->

    <!-- Map Section -->
    <section class="contact-map-section">
        <div class="auto-container">
            <div class="clearfix">
                <div class="map-box">
                    <h4>Informations sur l'emplacement</h4>
                    <ul class="contact-list">
                        <li>
                            <span class="icon flaticon-telephone"></span>
                            13 Rue Aomr EL KHAYAM Rés Yasmine B ETG 3 Num 13,<br>
                            {{-- <a href="#" class="direction">Obtenir l'itinéraire</a> --}}
                        </li>
                        <li>
                            <span class="icon flaticon-email-1"></span>
                            <a href="mailto:contact@benmoussaconsulting.com">contact@benmoussaconsulting.com</a>
                        </li>
                        <li>
                            <span class="icon flaticon-clock"></span>
                            <b>Lundi</b> : 14:00 - 19:30
                            <br>
                            <b>Mardi-Vendredi</b> : 09:30 - 19:30
                            <br>
                            <b>Samedi</b> : 9:30 - 13:30
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="outer-container">
            <!-- Map Boxed -->
            <div class="map-boxed">
                <!--Map Outer-->
                <div class="map-outer">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13298.048282612528!2d-7.6432226!3d33.5660515!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d3b53e753bbd%3A0x88efca26303ba445!2sCabinet%20de%20Coaching%20BenMoussa!5e0!3m2!1sen!2sma!4v1697561681669!5m2!1sen!2sma"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Section -->

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="/web/images/coach-chada-3.jpg" alt="" width="260px" />
                        </div>
                        <div class="image-two">
                            <img src="/web/images/DSC06838 cropped.JPG" alt="" width="400px" />
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <div class="title color-three">Contactez-nous</div>
                            <h2>Faites une demande personnalisée</h2>
                        </div>

                        <!-- Contact Form -->
                        <div class="contact-form">
                            <form id="clientForm">
                                <div class="row clearfix">

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <span class="icon flaticon-user-4"></span>
                                        <input type="text" name="full_name" placeholder="Nom & Prénom" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <span class="icon flaticon-envelope"></span>
                                        <input type="email" name="email" placeholder="Adresse E-Mail" required>
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <span class="icon flaticon-notebook"></span>
                                        <input type="text" name="subject" placeholder="Sujet" required>

                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <span class="icon flaticon-pen"></span>
                                        <textarea name="text" placeholder="Message" id="text" required></textarea>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button class="btn-style-three" type="submit" id="submit"><span
                                                class="txt">Envoyer</span></button>
                                    </div>

                                </div>
                            </form>

                        </div>
                        <!-- End Contact Form -->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Contact Form Section -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#clientForm').on('submit', function(e) {
                e.preventDefault();

                const form = $(this);
                const submitButton = $('#submit');

                submitButton.html(`<i class="fa fa-spinner fa-pulse"></i>`)
                    .css("cursor", "not-allowed")
                    .attr("disabled", true);

                $.ajax({
                    type: "POST",
                    url: "{{ route('send.message') }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        full_name: $('input[name=full_name]').val(),
                        email: $('input[name=email]').val(),
                        subject: $('input[name=subject]').val(),
                        text: $('#text').val(),
                    },
                    success: function(response) {
                        submitButton.html(`
                            <i class="fa fa-paper-plane"></i>
                        `).attr("disabled", false).css("cursor",
                            "pointer");

                        Swal.fire({
                            icon: "success",
                            title: "Félicitation",
                            html: response.message,
                        });
                    },
                    error: function(res, status, error) {
                        submitButton.text("Envoyer").attr("disabled", false).css("cursor",
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
