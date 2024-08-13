@extends('v1.web.layouts.default')

@section('title', 'Accueil')
@section('content')

    <!-- Main Slider -->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>

                    <li data-transition="slidingoverlayhorizontal" data-description="Slide Description" data-index="rs-1688"
                        data-slotamount="default" data-thumb="/web/images/main-slider/image-1.png" data-title="Slide Title">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                            data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                            src="/web/images/main-slider/image-1.png">

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['1100','800','800','500']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['-150','-240','-210','-210']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="">
                            <div class="title">Déverrouillez votre mindset</div>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['1100','800','800','500']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['-30','-100','-100','-110']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            style="">
                            <h1>Mohamed BenMoussa <br> Formateur international</h1>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['1100','800','800','500']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['100','40','15','0']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"power3.out"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            style="">
                            <div class="text">
                                Apprenez à améliorer vos relations avec votre partenaire et à mieux
                                comprendre l'éducation sexuelle avec Benmoussa, <br> un coach certifié en comportements
                                relationnels et développement humain. Inscrivez-vous dès aujourd'hui à des séances de
                                coaching.
                            </div>
                        </div>

                        <div class="tp-caption  tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['700','700','700','500']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['190','150','105','100']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="">
                            <div class="button-box">
                                <a href="{{ route('lead_form') }}" class="theme-btn btn-style-two">
                                    <span class="txt">
                                        Prendre Rendez-Vous
                                    </span>
                                </a>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Main Slider -->

    <section id="portfolio" class="course-section-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title color-four">Mohamed benmoussa</div>
                <h2>Notre présence dans les médias !</h2>
            </div>
            <div class="row clearfix">

                <!-- Course Block -->
                <div class="course-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="https://youtu.be/H9QqaVrSDK0?si=rhlPE_0RHr2_-l5O"
                                class="lightbox-image overlay-box"><img class="transition-500ms"
                                    src="/web/images/benmoussa-radio.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h5><a href="https://youtu.be/H9QqaVrSDK0?si=rhlPE_0RHr2_-l5O"
                                    class="lightbox-image overlay-box">Comment convaincre les gens</a></h5>
                            <ul class="post-info">
                                <li><span class="icon flaticon-book-1"></span>100 Clients</li>
                                <li><span class="icon flaticon-trophy"></span>Satisfait</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Course Block -->
                <div class="course-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="https://youtu.be/ACmDMOg-iK4?si=NswF92zTPqD9MVf0"
                                class="lightbox-image overlay-box"><img class="transition-500ms"
                                    src="/web/images/coach-chada-3.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h5><a href="https://youtu.be/ACmDMOg-iK4?si=NswF92zTPqD9MVf0"
                                    class="lightbox-image overlay-box">Comment obtenir un "oui" de ton mari/femme</a></h5>
                            <ul class="post-info">
                                <li><span class="icon flaticon-book-1"></span>367 Clients</li>
                                <li><span class="icon flaticon-trophy"></span>Satisfait</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Course Block -->
                <div class="course-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="https://youtu.be/iwcf3gv_Zc4?si=woTE7CPv0DYY1iON"
                                class="lightbox-image overlay-box"><img class="transition-500ms"
                                    src="/web/images/coach-chada-1.png" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h5><a href="https://youtu.be/iwcf3gv_Zc4?si=woTE7CPv0DYY1iON"
                                    class="lightbox-image overlay-box">Différence entre les femmes et les hommes</a></h5>
                            <ul class="post-info">
                                <li><span class="icon flaticon-book-1"></span>86 Clients</li>
                                <li><span class="icon flaticon-trophy"></span>Satisfait</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Course Block -->
                <div class="course-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="https://youtu.be/0pKUSbq3SS0?si=OpHHKQwE0GFi4Wup"
                                class="lightbox-image overlay-box"><img class="transition-500ms"
                                    src="/web/images/coach-chada-6.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h5><a href="https://youtu.be/0pKUSbq3SS0?si=OpHHKQwE0GFi4Wup"
                                    class="lightbox-image overlay-box">Narcissisme avec Coach Benmoussa</a></h5>
                            <ul class="post-info">
                                <li><span class="icon flaticon-book-1"></span>485 Clients</li>
                                <li><span class="icon flaticon-trophy"></span>Satisfait</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Course Section -->
    <section class="course-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Title Column -->
                <div class="title-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Cours de développement personnel</h2>
                            <div class="text">
                                Bienvenue dans l'univers inspirant de Mohamed BenMoussa, un coach personnel passionné et
                                empathique, spécialisé dans les domaines de la vie, de l'état d'esprit et des relations, y
                                compris les relations intimes et sexuelles. À travers les ondes radio et ses cours intimes,
                                Mohamed BenMoussa a aidé un grand nombre de personnes à atteindre une vie épanouissante et
                                équilibrée.
                            </div>
                        </div>
                        <div class="email-box">
                            <form id="accuill-form">
                                <div class="form-group">
                                    <span class="icon flaticon-phone-call"></span>
                                    <input type="text" name="phone_number-accuill-form" placeholder="Votre téléphone">
                                    <span id="phone_number-accuill-form-error" class="text text-danger"></span>
                                    <button type="submit" class="theme-btn btn-style-three"
                                        id="accuill-form-btn-submit">
                                        <span class="txt">
                                            Prendre Rendez-Vous
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <!-- Video Column -->
                <div class="video-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="pattern-layer" style="background-image: url(assets/images/background/pattern-1.png)">
                        </div>
                        <!-- Video Box -->
                        <div class="video-box">
                            <figure class="video-image">
                                <img class="transition-500ms" src="/web/images/benmoussa-radio.jpg" alt="">
                            </figure>
                            <a href="https://youtu.be/qNhqRJkzNgU?si=gqxCiPmoAw5xHYeY"
                                class="lightbox-image overlay-box"><span class="transition-900ms">Play<i
                                        class="ripple"></i></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Course Section -->


    <!-- Testimonial Section -->
    {{-- <section class="testimonial-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title color-four">Témoignages</div>
                <h2>Écoutez ce que mes clients <br> parle de moi.</h2>
            </div>
            <div class="testimonial-carousel owl-carousel owl-theme">

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="upper-box">
                            <span class="quote-icon flaticon-quote-3"></span>
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="text">" It’s amazing how much easier it has been to meet new people and create
                                instant connection. I have the exact same personality, the only thing that has changed is my
                                mindset and a few behaviors. "</div>
                        </div>
                        <div class="lower-box">
                            <div class="box-inner">
                                <div class="author-image">
                                    <img src="/web/images/resource/author-1.jpg" alt="" />
                                </div>
                                <h5>Alaxis D. Dowson</h5>
                                <div class="designation">Head Of Idea, Kilix Co.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="upper-box">
                            <span class="quote-icon flaticon-quote-3"></span>
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="text">" It’s amazing how much easier it has been to meet new people and create
                                instant connection. I have the exact same personality, the only thing that has changed is my
                                mindset and a few behaviors. "</div>
                        </div>
                        <div class="lower-box">
                            <div class="box-inner">
                                <div class="author-image">
                                    <img src="/web/images/resource/author-2.jpg" alt="" />
                                </div>
                                <h5>Alaxis D. Dowson</h5>
                                <div class="designation">Head Of Idea, Kilix Co.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="upper-box">
                            <span class="quote-icon flaticon-quote-3"></span>
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="text">" It’s amazing how much easier it has been to meet new people and create
                                instant connection. I have the exact same personality, the only thing that has changed is my
                                mindset and a few behaviors. "</div>
                        </div>
                        <div class="lower-box">
                            <div class="box-inner">
                                <div class="author-image">
                                    <img src="/web/images/resource/author-1.jpg" alt="" />
                                </div>
                                <h5>Alaxis D. Dowson</h5>
                                <div class="designation">Head Of Idea, Kilix Co.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="upper-box">
                            <span class="quote-icon flaticon-quote-3"></span>
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="text">" It’s amazing how much easier it has been to meet new people and create
                                instant connection. I have the exact same personality, the only thing that has changed is my
                                mindset and a few behaviors. "</div>
                        </div>
                        <div class="lower-box">
                            <div class="box-inner">
                                <div class="author-image">
                                    <img src="/web/images/resource/author-2.jpg" alt="" />
                                </div>
                                <h5>Alaxis D. Dowson</h5>
                                <div class="designation">Head Of Idea, Kilix Co.</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!-- End Testimonial Section -->

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
                    url: "{{ route('leads.store') }}",
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
