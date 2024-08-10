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
                                relationnels et développement humain. Inscrivez-vous dès aujourd'hui à des sciences de
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
                                        Rendez-vous
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

    <!-- Services Section -->
    <section class="services-section-two">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="services.html"><img src="/web/images/resource/service-1.jpg" alt=""></a>
                        </div>
                        <div class="lower-content">
                            <h5><a href="services.html">Coaching en Relations</a></h5>
                            <div class="text">Améliorez vos relations personnelles et professionnelles avec un coaching
                                personnalisé.</div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="150ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="services.html"><img src="/web/images/resource/service-2.jpg" alt=""></a>
                        </div>
                        <div class="lower-content">
                            <h5><a href="services.html">Développement Personnel</a></h5>
                            <div class="text">Découvrez des outils et techniques pour votre croissance personnelle.</div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="services.html"><img src="/web/images/resource/service-3.jpg" alt=""></a>
                        </div>
                        <div class="lower-content">
                            <h5><a href="services.html">Éducation Sexuelle</a></h5>
                            <div class="text">Améliorez vos connaissances en matière de santé et d'éducation sexuelle.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Services Section -->

@endsection
